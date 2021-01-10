<?php

namespace App\Http\Livewire\Admin\Unidade;

use App\Models\Unidade;
use Livewire\Component;
use Livewire\WithPagination;

class UnidadeComponent extends Component
{
    use WithPagination;

    public $nome, $unidade_id;

    public $view = 'create';
    
    public function render()
    {
        $unidades = Unidade::orderBy('id', 'desc')->simplePaginate(5);
        return view('livewire.admin.unidade.unidade-component', compact("unidades"))
            ->extends('layouts.template.layout')
            ->section('body');
    }

    public function store(){
        $this->validate(['nome' => "required|min:2|max:50",]);
        Unidade::create([
            'nome' => $this->nome,
        ]);

        $this->nome = "";
    }

    public function edit($id) {
        $unidade = Unidade::find($id);
        
        $this->nome = $unidade->nome;
        $this->unidade_id = $unidade->id;
        $this->view = "edit";
    }

    public function update($id) {
        $unidade = Unidade::find($id);
        $unidade->update([
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
        Unidade::destroy($id);
    }
}
