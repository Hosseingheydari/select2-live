<?php           

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\Ostan ;
use App\models\City ;


class Specification extends Component
{   
    public $selectedUniversityId , $selectedCityId,$selectedOstanId;
    public $cities=[] , $ostans=[], $university=[];
    protected $listeners = ['getCityByOstanId'=>'getCityByOstanId'];
    public function mount()
    {
        
        $this->ostans = Ostan::select('id','name')->
                        get()->toArray();
    }
    public function getCityByOstanId()
    {
        $this->cities = City::select('id','name')->where('ostan_id',$this->selectedOstanId)
                        ->get()
                        ->toArray();

    }
    
    public function render()
    {
        return view('livewire.specification');
    }
}
