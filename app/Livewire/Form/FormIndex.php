<?php

namespace App\Livewire\Form;

use App\Mail\OrderCity;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormIndex extends Component
{
    public $email;
    public $name;
    public $commet;

    public function send()
{

        Mail::to($this->email)->send(new OrderCity($this->name));
        return redirect()->route('index');
    }



    public function render()
    {
        return view('livewire.form.form-index');
    }
}
