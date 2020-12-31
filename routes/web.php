<?php

use App\Http\Livewire\CardapioComponent;
use App\Http\Livewire\ContatosComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\NoticiasComponent;
use App\Http\Livewire\QuemSomosComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/home", HomeComponent::class)->name("home");
Route::get("/cardapio", CardapioComponent::class)->name("cardapio");
Route::get("/quem-somos", QuemSomosComponent::class)->name("quem-somos");
Route::get("/noticias", NoticiasComponent::class)->name("noticias");
Route::get("/contado", ContatosComponent::class)->name("contado");



Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layouts.template.layout');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');