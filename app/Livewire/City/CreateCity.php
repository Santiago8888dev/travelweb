<?php

namespace App\Livewire\City;

use App\Models\City;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class CreateCity extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $location;
    public $image;

    public function create(){
    $data = $this->validate([
        'name'=>'required',
        'description' =>'required',
        'location' =>'required',
        'image'=> 'file|required'
    ]);


    if ($this->image) {
        $slug = Str::slug($data['name']);
        $fileName = $slug . '.png';
        $data['image'] = Storage::disk('city')->put($fileName, $this->image->get());
        $data['image'] = $fileName;
    }

    City::create($data);
    redirect()->route('index');

    }
    public function render()
    {
        return view('livewire.city.create-city');
    }
}
