<?php

use App\Http\Livewire\CardapioComponent;
use App\Http\Livewire\ContatosComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\NoticiasComponent;
use App\Http\Livewire\QuemSomosComponent;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Cardapio\CategoriaComponent;
use App\Http\Livewire\Admin\Cardapio\IngredientesComponent;
use App\Http\Livewire\Admin\Cardapio\ProdutoComponent;
use App\Http\Livewire\Admin\Unidade\UnidadeComponent;
use App\Http\Livewire\Admin\Empresa\EmpresaComponet;
use App\Http\Livewire\Admin\Home\HomeSiteComponent;

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



Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get("/dashboard", Dashboard::class)->name("dashboard");

    /**
     * Cardápio
     */
    Route::get("/cardapio/categoria", CategoriaComponent::class)->name("cardapio.categoria");
    Route::get("/cardapio/ingredientes", IngredientesComponent::class)->name("cardapio.ingredientes");
    Route::get("/cardapio/produto", ProdutoComponent::class)->name("cardapio.produto");

    Route::any("/cardapio/unidade", UnidadeComponent::class)->name("unidade");

    // Empresa
    Route::get("/empresa", EmpresaComponet::class)->name("empresa");

    // adicionar dados na home
    Route::get("/home-site", HomeSiteComponent::class)->name("home.site");
});

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
 */
