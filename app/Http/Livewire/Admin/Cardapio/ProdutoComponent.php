<?php

namespace App\Http\Livewire\Admin\Cardapio;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Ingrediente;
use App\Models\Categoria;
use App\Models\Unidade;
use App\Models\Produto;

class ProdutoComponent extends Component
{
    use WithPagination;

    public $ingrediente_id, $openPizza, $produto_id;
    public $nome, $preco_pequena, $preco_media, $preco_grande, $preco_gigante, $preco, $promocao, $preco_promocao_pequena;
    public $qtd_fatia_pequena, $qtd_fatia_media, $qtd_fatia_grande, $qtd_fatia_gigante;
    public $preco_promocao_media, $preco_promocao_grande, $preco_promocao_gigante, $preco_promocao, $categoria_id, $detalhes, $descricao;

    public $view = 'create';
    public $title = 'Adicionar um novo Produto';
    public $nav_ills = false;
    public $addClass = true;
    public $addClassPromocao = true;
    public $addPromocao = false;
    

    public function render()
    {
        $produtos = Produto::orderBy('id', 'desc')->simplePaginate(5);
        $ingredientes = Ingrediente::all();
        $categorias = Categoria::all();
        $unidades = Unidade::all();
        return view('livewire.admin.cardapio.produto-component', compact("produtos", "ingredientes", "categorias", "unidades"))
            ->extends('layouts.template.layout')
            ->section('body');
    }

    public function create(){
        $this->nome = "";
        $this->categoria_id = "-----";
        $this->preco_pequena = "";
        $this->preco_media = "";
        $this->preco_grande = "";
        $this->preco_gigante = "";
        $this->preco = "";
        $this->promocao = "";
        $this->preco_promocao_pequena = "";
        $this->preco_promocao_media = "";
        $this->preco_promocao_grande = "";
        $this->preco_promocao_gigante = "";
        $this->preco_promocao = "";
        $this->detalhes = "";
        $this->descricao = "";
        $this->nav_ills = true;
        $this->title = 'Adicionar um novo Produto';
        $this->view = 'create';
    }

    public function openPizza() {
        $this->openPizza = $this->categoria_id;
        if ($this->openPizza == 15) {
            $this->addClass = false;
        }else{
            $this->addClass = true;
        }

    }

    public function promocao() {
        $this->openPizza = $this->categoria_id;
        if ($this->promocao == "S") {
            $this->addPromocao = true;
        }else{
            $this->addPromocao = false;
        }

    }

    public function store(){
        $this->validate([
                'nome' => "required|min:3|max:50",
                "preco_pequena" => "nullable",
                "preco_media" => "nullable",
                "preco_grande" => "nullable",
                "preco_gigante" => "nullable",
                "preco" => "nullable",
                "promocao" => "nullable",
                "preco_promocao_pequena" => "nullable",
                "preco_promocao_media" => "nullable",
                "preco_promocao_grande" => "nullable",
                "preco_promocao_gigante" => "nullable",
                "preco_promocao" => "nullable",
                "categoria_id" => "required",
                "detalhes" =>  'nullable|min:3|max:150',
                "descricao" =>  'nullable|min:3|max:150',
                ]);

        $this->preco_pequena = str_replace([','], '.', $this->preco_pequena);
        $this->preco_media = str_replace([','], '.', $this->preco_media);
        $this->preco_grande = str_replace([','], '.', $this->preco_grande);
        $this->preco_gigante = str_replace([','], '.', $this->preco_gigante);
        $this->preco = str_replace([','], '.', $this->preco);
        $this->preco_promocao_pequena = str_replace([','], '.', $this->preco_promocao_pequena);
        $this->preco_promocao_media = str_replace([','], '.', $this->preco_promocao_media);
        $this->preco_promocao_grande = str_replace([','], '.', $this->preco_promocao_grande);
        $this->preco_promocao_gigante = str_replace([','], '.', $this->preco_promocao_gigante);
        $this->preco_promocao = str_replace([','], '.', $this->preco_promocao);

        Produto::create([
            "nome" => $this->nome,
            "preco_pequena" => $this->preco_pequena == ""  ? null : $this->preco_pequena,
            "preco_media" => $this->preco_media == ""  ? null : $this->preco_media,
            "preco_grande" => $this->preco_grande == ""  ? null : $this->preco_grande,
            "preco_gigante" => $this->preco_gigante == ""  ? null : $this->preco_gigante,
            "preco" => $this->preco == ""  ? null : $this->preco,
            "promocao" => $this->promocao  == false  ? "N" : $this->promocao,
            "preco_promocao_pequena" => $this->preco_promocao_pequena == ""  ? null : $this->preco_promocao_pequena,
            "preco_promocao_media" => $this->preco_promocao_media == ""  ? null : $this->preco_promocao_media,
            "preco_promocao_grande" => $this->preco_promocao_grande == ""  ? null : $this->preco_promocao_grande,
            "preco_promocao_gigante" => $this->preco_promocao_gigante == ""  ? null : $this->preco_promocao_gigante,
            "qtd_fatia_pequena" => $this->qtd_fatia_pequena,
            "qtd_fatia_media" => $this->qtd_fatia_media,
            "qtd_fatia_grande" => $this->qtd_fatia_grande,
            "qtd_fatia_gigante" => $this->qtd_fatia_gigante,
            "preco_promocao" => $this->preco_promocao == ""  ? null : $this->preco_promocao,
            "categoria_id" => $this->categoria_id,
            "detalhes" => $this->detalhes,
            "descricao" => $this->descricao,
        ]);

        $this->nome = "";
        $this->preco_pequena = "";
        $this->preco_media = "";
        $this->preco_grande = "";
        $this->preco_gigante = "";
        $this->preco = "";
        $this->promocao = "";
        $this->preco_promocao_pequena = "";
        $this->preco_promocao_media = "";
        $this->preco_promocao_grande = "";
        $this->preco_promocao_gigante = "";
        $this->qtd_fatia_pequena = "";
        $this->qtd_fatia_media = "";
        $this->qtd_fatia_grande = "";
        $this->qtd_fatia_gigante = "";
        $this->preco_promocao = "";
        $this->categoria_id = "";
        $this->detalhes = "";
        $this->descricao = "";
        $this->nav_ills = false;
        
    }

    public function edit($id) {
        $produto = Produto::find($id);
        
        $this->nome = $produto->nome;
        $this->preco_pequena = $produto->preco_pequena;
        $this->preco_media = $produto->preco_media;
        $this->preco_grande = $produto->preco_grande;
        $this->preco_gigante = $produto->preco_gigante;
        $this->qtd_fatia_pequena = $produto->qtd_fatia_pequena;
        $this->qtd_fatia_media = $produto->qtd_fatia_media;
        $this->qtd_fatia_grande = $produto->qtd_fatia_grande;
        $this->qtd_fatia_gigante = $produto->qtd_fatia_gigante;
        $this->preco = $produto->preco;
        $this->categoria_id = $produto->categoria_id;
        if ($produto->categoria_id == 15) {
            $this->addClass = false;
        }
        if ($produto->promocao == "S") {
            $this->addPromocao = true;
            $this->promocao = $produto->promocao;
        }
        
        $this->preco_promocao_pequena = $produto->preco_promocao_pequena;
        $this->preco_promocao_media = $produto->preco_promocao_media;
        $this->preco_promocao_grande = $produto->preco_promocao_grande;
        $this->preco_promocao_gigante = $produto->preco_promocao_gigante;
        $this->preco_promocao = $produto->preco_promocao;
        $this->detalhes = $produto->detalhes;
        $this->descricao = $produto->descricao;
        $this->nav_ills = true;
        $this->produto_id = $produto->id;
        $this->title = "Editar produto";
        $this->view = "edit";
    }

    public function update($id) {

        $this->preco_pequena = str_replace([','], '.', $this->preco_pequena);
        $this->preco_media = str_replace([','], '.', $this->preco_media);
        $this->preco_grande = str_replace([','], '.', $this->preco_grande);
        $this->preco_gigante = str_replace([','], '.', $this->preco_gigante);
        $this->preco = str_replace([','], '.', $this->preco);
        $this->preco_promocao_pequena = str_replace([','], '.', $this->preco_promocao_pequena);
        $this->preco_promocao_media = str_replace([','], '.', $this->preco_promocao_media);
        $this->preco_promocao_grande = str_replace([','], '.', $this->preco_promocao_grande);
        $this->preco_promocao_gigante = str_replace([','], '.', $this->preco_promocao_gigante);
        $this->preco_promocao = str_replace([','], '.', $this->preco_promocao);

        $produto = Produto::find($id);
        $produto->update([
            "nome" => $this->nome,
            "preco_pequena" => $this->preco_pequena == ""  ? null : $this->preco_pequena,
            "preco_media" => $this->preco_media == ""  ? null : $this->preco_media,
            "preco_grande" => $this->preco_grande == ""  ? null : $this->preco_grande,
            "preco_gigante" => $this->preco_gigante == ""  ? null : $this->preco_gigante,
            "preco" => $this->preco == ""  ?? null,
            "promocao" => $this->promocao  == false  ? "N" : $this->promocao,
            "preco_promocao_pequena" => $this->preco_promocao_pequena == ""  ? null : $this->preco_promocao_pequena,
            "preco_promocao_media" => $this->preco_promocao_media == ""  ? null : $this->preco_promocao_media,
            "preco_promocao_grande" => $this->preco_promocao_grande == ""  ? null : $this->preco_promocao_grande,
            "preco_promocao_gigante" => $this->preco_promocao_gigante == ""  ? null : $this->preco_promocao_gigante,
            "qtd_fatia_pequena" => $this->qtd_fatia_pequena,
            "qtd_fatia_media" => $this->qtd_fatia_media,
            "qtd_fatia_grande" => $this->qtd_fatia_grande,
            "qtd_fatia_gigante" => $this->qtd_fatia_gigante,
            "preco_promocao" => $this->preco_promocao == ""  ? null : $this->preco_promocao,
            "categoria_id" => $this->categoria_id,
            "detalhes" => $this->detalhes,
            "descricao" => $this->descricao,
        ]);
        
        $this->nome = "";
        $this->preco_pequena = "";
        $this->preco_media = "";
        $this->preco_grande = "";
        $this->preco_gigante = "";
        $this->preco = "";
        $this->promocao = "";
        $this->preco_promocao_pequena = "";
        $this->preco_promocao_media = "";
        $this->preco_promocao_grande = "";
        $this->preco_promocao_gigante = "";
        $this->qtd_fatia_pequena = "";
        $this->qtd_fatia_media = "";
        $this->qtd_fatia_grande = "";
        $this->qtd_fatia_gigante = "";
        $this->preco_promocao = "";
        $this->categoria_id = "";
        $this->detalhes = "";
        $this->descricao = "";
        $this->nav_ills = false;
        $this->view = 'create';
    }

    public function default(){
        $this->nome = "";
        $this->preco_pequena = "";
        $this->preco_media = "";
        $this->preco_grande = "";
        $this->preco_gigante = "";
        $this->preco = "";
        $this->promocao = "";
        $this->preco_promocao_pequena = "";
        $this->preco_promocao_media = "";
        $this->preco_promocao_grande = "";
        $this->preco_promocao_gigante = "";
        $this->preco_promocao = "";
        $this->categoria_id = "";
        $this->detalhes = "";
        $this->descricao = "";
        $this->nav_ills = false;
        $this->title = 'Adicionar um novo produto';
        $this->view = 'create';
    }

    public function show($id){
    }

    public function destroy($id){
        Produto::destroy($id);
    }

}
