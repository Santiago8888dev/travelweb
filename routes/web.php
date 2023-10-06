<?php

use App\Http\Controllers\FormController;
use App\Livewire\Form\FormIndex;
use App\Http\Controllers\LenguajeController;
use App\Livewire\City\CreateCity;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/form', FormIndex::class)->name('form');
Route::get('/lang/{lang}', [LenguajeController::class, 'switchLang'])->name('lenguaje');


//! ruta crud de image(nes
Route::get('city/create' , CreateCity::class)->name('CreateIndex');

