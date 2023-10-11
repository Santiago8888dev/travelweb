<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Termwind\render;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function form(){
        return view('contact');
    }

    public function create(){
        return view('create');
    }

}
