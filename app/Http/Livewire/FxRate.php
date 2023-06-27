<?php

namespace App\Http\Livewire;

use App\CustomClasses\Activity;
use App\CustomClasses\Permission;
use App\CustomClasses\Publish;
use App\CustomClasses\StoreRateToArray;
use App\Models\Flag;
use App\Models\Rate;
use App\Models\Tab;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class FxRate extends Component
{
    use LivewireAlert;
    
    public $key, $currency, $buy, $sell;
    public $c, $b, $s;
    public $x = -1, $y = -1, $z = -1, $i = -1;
    public $tab1, $tab2, $tab3;

    public function mount()
    {
        $this->key = Rate::pluck('id');
        $this->currency = Rate::pluck('currency');
        $this->buy = Rate::pluck('buy');
        $this->sell = Rate::pluck('sell');

        $tabs = Tab::first();
        $this->tab1 = $tabs->tab4;
        $this->tab2 = $tabs->tab5;
        $this->tab3 = $tabs->tab6;
    }

    public function render()
    {
        return view('livewire.fx-rate', [
            'rates' => Rate::all(),
            'tabs' => Tab::first(),
            'flags' => Flag::all(),
        ]);
    }


    public function save()
    {
        if (Permission::check('can_update_rate')) {
            $x = count($this->currency);
            for ($i = 0; $i < $x; $i++) {
                $rate = Rate::find($this->key[$i]);
                $rate->currency = $this->currency[$i];
                $rate->buy = $this->buy[$i];
                $rate->sell = $this->sell[$i];
                $rate->update();

                //root url
                $tv_path = session()->get('tv')['name'];
                $url = url('/') . '/' . $tv_path . '/App/flag/' . $this->currency[$i] . '.png';
                Publish::logChangedFiles($url, 'Today\'s Rate');
            }

            $tabs = Tab::first();
            $tabs->tab4 = $this->tab1;
            $tabs->tab5 = $this->tab2;
            $tabs->tab6 = $this->tab3;
            $tabs->update();

            //store to array
            StoreRateToArray::store();
            Activity::logChanges('FX Rate', 'Today\'s Rate', 'updated');  //log activities

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
            Rate::create([
                'currency' => $this->c,
                'buy' => $this->b,
                'sell' => $this->s,
            ]);

            $tv_path = session()->get('tv')['name'];
            $url = url('/') . '/' . $tv_path . '/App/flag/' . $this->c . '.png';
            Publish::logChangedFiles($url, 'Today\'s Rate');
            Activity::logChanges($this->c . ' FX Rate', 'Today\'s Rate', 'added');  //log activities

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

            $this->showForm = false;
            $this->showBtn = true;
            $this->c = null;
            $this->b = null;
            $this->s = null;
            $this->key = Rate::pluck('id');
            $this->currency = Rate::pluck('currency');
            $this->buy = Rate::pluck('buy');
            $this->sell = Rate::pluck('sell');
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
            $rate = Rate::find($id);
            Activity::logChanges($rate->currency . ' FX Rate', 'Today\'s Rate', 'deleted');  //log activities
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
