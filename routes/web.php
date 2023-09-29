<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LenguajeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', [FormController::class, 'index'])->name('form');
Route::get('/lang/{lang}', [LenguajeController::class, 'switchLang'])->name('lenguaje');
