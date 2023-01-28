<?php           

namespace App\Http\Livewire;

use Livewire\Component;

class Specification extends Component
{   
    public $ostanSelectedById , $sitySelectedById ,$universitySelectedBiId;
    public $city=[] , $ostan=[], $university=[];
    public function mount()
    {
        $this->ostans = Ostan::all()->get()->toArray();
    }
    public function render()
    {
        return view('livewire.specification');
    }
}
