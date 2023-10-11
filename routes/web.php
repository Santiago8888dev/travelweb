<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use App\Livewire\Form\FormIndex;
use App\Http\Controllers\LenguajeController;
use App\Livewire\City\CreateCity;
use App\Livewire\City\ListCity;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index'] )->name('index');
Route::get('/form', [IndexController::class, 'form'])->name('formulario');
Route::get('/create', [IndexController::class, 'create'])->name('create');
//email y lenguajes
Route::get('/email', FormIndex::class); //este es el de email
Route::get('/lang/{lang}', [LenguajeController::class, 'switchLang'])->name('lenguaje'); //lenguajes

// Route::middleware('auth')->get('/r', CreateCity::class
// )->name('CreateIndex');
//! ruta crud de image(nes
Route::get('city/create' , CreateCity::class)->name('CreateIndex'); //crear img
Route::get('city/index', ListCity::class)->name('listCity'); //listar

//register y inicio de seccion
Auth::routes();
//logeado
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
