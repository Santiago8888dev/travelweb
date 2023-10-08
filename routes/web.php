<?php

use App\Http\Controllers\FormController;
use App\Livewire\Form\FormIndex;
use App\Http\Controllers\LenguajeController;
use App\Livewire\City\CreateCity;
use App\Livewire\City\ListCity;
use Illuminate\Support\Facades\Route;

//email y lenguajes
Route::get('/form', FormIndex::class)->name('form');
Route::get('/lang/{lang}', [LenguajeController::class, 'switchLang'])->name('lenguaje');


//! ruta crud de image(nes
Route::get('city/create' , CreateCity::class)->name('CreateIndex');
Route::get('/index', ListCity::class)->name('listCity');

