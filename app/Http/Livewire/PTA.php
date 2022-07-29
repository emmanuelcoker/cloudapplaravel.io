<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\CustomClasses\StoreRateToArray;
use App\Models\Country;
use App\Models\PtaRate;
use App\Models\Tab;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PTA extends Component
{
    use LivewireAlert;

    public $key, $currency, $value;
    public $c, $v;
    public $x = -1, $y = -1, $i = -1;


    public function mount()
    {
        $this->key = PtaRate::pluck('id');
        $this->currency = PtaRate::pluck('currency');
        $this->value = PtaRate::pluck('value');
    }

    public function render()
    {
        return view('livewire.p-t-a', [
            'ptas' => PtaRate::all(),
            'tabs' => Tab::first(),
            'countries' => Country::all(),
        ]);
    }




    public function save()
    {
        if (Permission::check('can_update_rate')) {
            $x = count($this->key);
            for ($i = 0; $i < $x; $i++) {
                $rate = PtaRate::find($this->key[$i]);
                $rate->currency = $this->currency[$i];
                $rate->value = $this->value[$i];
                $rate->update();
            }

            //store to array
            StoreRateToArray::store();
            Activity::logChanges('PTA Rates', 'Today\'s Rate', 'updated');  //log activities

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
            PtaRate::create([
                'currency' => $this->c,
                'value' => $this->v,
            ]);

            //store to array
            StoreRateToArray::store();

            $this->alert('success', 'Added successfully!', [
                'position' =>  'center',
                'timer' =>  4000,
                'toast' =>  false,
                'text' =>  '',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  true,
            ]);

            Activity::logChanges($this->c . ' PTA Rates', 'Today\'s Rate', 'added');  //log activities

            $this->showForm = false;
            $this->showBtn = true;
            $this->c = null;
            $this->v = null;
            $this->key = PtaRate::pluck('id');
            $this->currency = PtaRate::pluck('currency');
            $this->value = PtaRate::pluck('value');
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
            $rate = PtaRate::find($id);
            Activity::logChanges($rate->currency . ' PTA Rates', 'Today\'s Rate', 'deleted');  //log activities
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
