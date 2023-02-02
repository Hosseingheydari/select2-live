<?php           

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\Ostan ;
use App\models\City ;
use App\models\University ;




class Specification extends Component
{   
    public $selectedUniversityId , $selectedCityId,$selectedOstanId;
    public $cities=[] , $ostans=[], $universities=[];
    protected $listeners = ['getCityByOstanId'=>'getCityByOstanId','getUniversityByCityId'];
    public function mount()
    {
        
        $this->ostans = Ostan::select('id','name')->
                        get()->toArray();
    }
    public function hydrate()
    {
        $this->dispatchBrowserEvent('select2_event');
    }
    public function getCityByOstanId()
    {
        $this->cities = City::select('id','name')->where('ostan_id',$this->selectedOstanId)
                        ->get()
                        ->toArray();
        $this->reset('universities','selectedCityId');

    }
    public function getUniversityByCityId()
    {
        $this->universities = University::select('id','name')->where('city_id',$this->selectedCityId)
                        ->get()
                        ->toArray();
        

    }
    
    public function render()
    {
        return view('livewire.specification');
    }   
}
