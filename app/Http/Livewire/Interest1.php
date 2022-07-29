<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\CustomClasses\StoreRateToArray;
use App\Models\InterestRate1;
use App\Models\Tab;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Interest1 extends Component
{
    use LivewireAlert;
    public $key, $name, $value;
    public $n, $v;
    public $x = -1, $y = -1, $i = -1;


    public function mount()
    {
        $this->key = InterestRate1::pluck('id');
        $this->name = InterestRate1::pluck('name');
        $this->value = InterestRate1::pluck('value');
    }


    public function render()
    {
        return view('livewire.interest1', [
            'interests' => InterestRate1::all(),
            'tabs' => Tab::first(),
        ]);
    }




    public function save()
    {
        if (Permission::check('can_update_rate')) {
            $x = count($this->key);
            for ($i = 0; $i < $x; $i++) {
                $rate = InterestRate1::find($this->key[$i]);
                $rate->name = $this->name[$i];
                $rate->value = $this->value[$i];
                $rate->update();
            }
            Activity::logChanges('Interest Rate', 'Today\'s Rate', 'updated');  //log activities
            //store to array
            StoreRateToArray::store();

            $this->alert('success', 'Updated successfully!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        } else {
            $this->alert('info', 'No Permission', [
                'position' =>  'center',
                'timer' =>  10000,
                'toast' =>  false,
                'text' =>  'you don\'t have permission to perform this operation!',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        }
    }



    public function add()
    {
        if (Permission::check('can_update_rate')) {
            InterestRate1::create([
                'name' => $this->n,
                'value' => $this->v,
            ]);

            $this->alert('success', 'Added successfully!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);

            //store to array
            StoreRateToArray::store();
            Activity::logChanges($this->n . ' Interest Rate', 'Today\'s Rate', 'added');  //log activities

            $this->showForm = false;
            $this->showBtn = true;
            $this->n = null;
            $this->v = null;
            $this->key = InterestRate1::pluck('id');
            $this->name = InterestRate1::pluck('name');
            $this->value = InterestRate1::pluck('value');
        } else {
            $this->alert('info', 'No Permission', [
                'position' =>  'center',
                'timer' =>  10000,
                'toast' =>  false,
                'text' =>  'you don\'t have permission to perform this operation!',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        }
    }




    public function delete($id)
    {
        if (Permission::check('can_update_rate')) {
            $rate = InterestRate1::find($id);
            Activity::logChanges($rate->name . ' Interest Rate', 'Today\'s Rate', 'deleted');  //log activities
            $rate->delete();

            //store to array
            StoreRateToArray::store();

            $this->alert('success', 'Deleted successfully!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        } else {
            $this->alert('info', 'No Permission', [
                'position' =>  'center',
                'timer' =>  10000,
                'toast' =>  false,
                'text' =>  'you don\'t have permission to perform this operation!',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);
        }
    }
}
