<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

class LenguajeController extends Controller
{
    public function switchLang($lang){
        if (array_key_exists($lang, Config::get('lenguajes'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }
}
