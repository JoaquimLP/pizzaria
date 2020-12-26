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
Route::get("/home/cardapio", CardapioComponent::class)->name("home.cardapio");
Route::get("/home/quem-somos", QuemSomosComponent::class)->name("home.quem-somos");
Route::get("/home/noticias", NoticiasComponent::class)->name("home.noticias");
Route::get("/home/contado", ContatosComponent::class)->name("home.contado");

Route::get('/', function () {
    return view('welcome');
});
