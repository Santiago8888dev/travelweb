<?php

namespace App\Livewire\City;

use App\Models\City;
use Livewire\Component;

class ListCity extends Component
{
    public $city=[];
    public function mount(){
        $this->city = City::all();
    }
    public function render()
    {
        return view('livewire.city.list-city');
    }
}
