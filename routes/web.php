<?php

use App\Http\Controllers\FormController;
use App\Livewire\Form\FormIndex;
use App\Http\Controllers\LenguajeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', FormIndex::class)->name('form')->name('form');
Route::get('/lang/{lang}', [LenguajeController::class, 'switchLang'])->name('lenguaje');
