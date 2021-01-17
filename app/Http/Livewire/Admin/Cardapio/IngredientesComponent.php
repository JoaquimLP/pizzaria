<?php

namespace App\Http\Livewire\Admin\Cardapio;

use App\Models\Ingrediente;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Categoria;
use App\Models\Unidade;

class IngredientesComponent extends Component
{
    use WithPagination;

    public $nome, $quantidade, $categoria_id, $unidade_id, $ingrediente_id;

    public $view = 'create';
    public $title = 'Adicionar um novo Ingrediente';
    public $nav_ills = false;

    public function render()
    {
        $ingredientes = Ingrediente::orderBy('id', 'desc')->simplePaginate(5);
        $categorias = Categoria::all();
        $unidades = Unidade::all();

        return view('livewire.admin.cardapio.ingredientes-component', compact("ingredientes", "categorias", "unidades"))
            ->extends('layouts.template.layout')
            ->section('body');
    }

    public function create(){
        $this->nome = "";
        $this->quantidade = "";
        $this->categoria_id = "-----";
        $this->unidade_id = "-----";
        $this->nav_ills = true;
        $this->title = 'Adicionar um novo Ingrediente';
        $this->view = 'create';
    }

    public function store(){
        $this->validate([
                'nome' => "required|min:3|max:50",
                'quantidade' => "required",
                'categoria_id' => "required",
                'unidade_id' => "required",
                ]);

        /* if ($validated) {
            # code...
        } */
        Ingrediente::create([
            'nome' => $this->nome,
            'quantidade' => $this->quantidade,
            'categoria_id' => $this->categoria_id,
            'unidade_id' => $this->unidade_id,
        ]);

        $this->nome = "";
        $this->quantidade = "";
        $this->categoria_id = "";
        $this->unidade_id = "";
        $this->nav_ills = false;
        
    }

    public function edit($id) {
        $ingrediente = Ingrediente::find($id);
        
        $this->nome = $ingrediente->nome;
        $this->quantidade = $ingrediente->quantidade;
        $this->categoria_id = $ingrediente->categoria_id;
        $this->unidade_id = $ingrediente->unidade_id;
        $this->nav_ills = true;
        $this->ingrediente_id = $ingrediente->id;
        $this->title = "Editar Ingrediente";
        $this->view = "edit";
    }

    public function update($id) {
        $ingrediente = Ingrediente::find($id);
        $ingrediente->update([
            'nome' => $this->nome,
            'quantidade' => $this->quantidade,
            'categoria_id' => $this->categoria_id,
            'unidade_id' => $this->unidade_id,
        ]);
        
        $this->nome = "";
        $this->quantidade = "";
        $this->categoria_id = "";
        $this->unidade_id = "";
        $this->nav_ills = false;
        $this->view = 'create';
    }

    public function default(){
        $this->nome = "";
        $this->quantidade = "";
        $this->categoria_id = "";
        $this->unidade_id = "";
        $this->nav_ills = false;
        $this->title = 'Adicionar um novo Ingrediente';
        $this->view = 'create';
    }

    public function destroy($id){
        Ingrediente::destroy($id);
    }
}
