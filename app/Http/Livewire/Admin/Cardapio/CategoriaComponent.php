<?php

namespace App\Http\Livewire\Admin\Cardapio;

use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithPagination;


class CategoriaComponent extends Component
{
    use WithPagination;

    public $nome, $categoria_id;

    public $view = 'create';


    public function render()
    {
        $categorias = Categoria::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.cardapio.categoria-component', compact('categorias'))
            ->extends('layouts.template.layout')
            ->section('body');
    }

    public function store(){
        $this->validate(['nome' => "required|min:3|max:50",]);
        Categoria::create([
            'nome' => $this->nome,
        ]);

        $this->nome = "";
    }

    public function edit($id) {
        $categoria = Categoria::find($id);
        
        $this->nome = $categoria->nome;
        $this->categoria_id = $categoria->id;
        $this->view = "edit";
    }

    public function update($id) {
        $categoria = Categoria::find($id);
        $categoria->update([
            'nome' => $this->nome,
        ]);
        
        $this->nome = "";
        $this->view = 'create';
    }

    public function default(){
        $this->nome = "";
        $this->view = 'create';
    }

    public function destroy($id){
        Categoria::destroy($id);
    }
}
