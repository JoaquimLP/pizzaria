<?php

namespace App\Http\Livewire\Admin\Cardapio;

use App\Models\Ingrediente;
use Livewire\Component;
use Livewire\WithPagination;

class IngredientesComponent extends Component
{
    use WithPagination;

    public $nome, $categoria_id;

    public $view = 'create';

    public function render()
    {
        $ingredientes = Ingrediente::orderBy('id', 'desc')->simplePaginate(5);
        return view('livewire.admin.cardapio.ingredientes-component', compact("ingredientes"))
            ->extends('layouts.template.layout')
            ->section('body');
    }
}
