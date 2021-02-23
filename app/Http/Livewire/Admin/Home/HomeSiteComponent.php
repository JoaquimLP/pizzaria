<?php

namespace App\Http\Livewire\Admin\Home;

use App\Models\HomeSite;
use Livewire\Component;
use Livewire\WithFileUploads;

class HomeSiteComponent extends Component
{
    use WithFileUploads;

    public $image1, $image2, $image3, $titulo_isntituicional, $subtitulo_isntituicional;
    public $descricao_isntituicional, $titulo, $subtitulo, $descricao, $detalhes_isntituicional;
    public $view = "create";
    public $title = "Adicionar dados no site ";
    public $homeSite, $homeSite_id;

    public function render()
    {
        $this->homeSite = HomeSite::first();
        return view('livewire.admin.home.home-site-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }

    public function store(){
        $this->validate([
            "image1" => 'required|image|max:1024',
            "image2" => 'required|image',
            "image3" => 'required|image',
            "titulo_isntituicional" => "required|min:3|max:50",
            "subtitulo_isntituicional" => "required|min:3|max:50",
            "descricao_isntituicional" => "required|min:3|max:150",
            "detalhes_isntituicional" => "required|min:3|max:150",
            "titulo" => "required|min:3|max:50",
            "subtitulo" => "required|min:3|max:50",
            "descricao" => "required|min:3|max:150",
        ]);

        $image1 = null;
        $image2 = null;
        $image3 = null;

        if ($this->image1) {
            $nameFile = "image1".".". $this->image1->getClientOriginalExtension();
            if($path = $this->image1->storeAs("home-site", $nameFile)){
                $image1 = $path;
            };
        }
        if ($this->image2) {
            $nameFile = "image2".".". $this->image2->getClientOriginalExtension();
            if($path = $this->image2->storeAs("home-site", $nameFile)){
                $image2 = $path;
            };
        }
        if ($this->image3) {
            $nameFile = "image3".".". $this->image3->getClientOriginalExtension();
            if($path = $this->image3->storeAs("home-site", $nameFile)){
                $image3 = $path;
            };
        }

        HomeSite::create([
            "image1" => $image1,
            "image2" => $image2,
            "image3" => $image3,
            "titulo_isntituicional" => $this->titulo_isntituicional,
            "subtitulo_isntituicional" => $this->subtitulo_isntituicional,
            "descricao_isntituicional" => $this->descricao_isntituicional,
            "detalhes_isntituicional" => $this->detalhes_isntituicional,
            "titulo" => $this->titulo,
            "subtitulo" => $this->subtitulo,
            "descricao" => $this->descricao,
        ]);

        $this->image1 = "";
        $this->image2 = "";
        $this->image3 = "";
        $this->titulo_isntituicional = "";
        $this->subtitulo_isntituicional = "";
        $this->descricao_isntituicional = "";
        $this->detalhes_isntituicional = "";
        $this->titulo = "";
        $this->subtitulo = "";
        $this->descricao = "";
    }

    public function edit($id){
        $homeSite = HomeSite::find($id);

        $this->titulo_isntituicional = $homeSite->titulo_isntituicional;
        $this->subtitulo_isntituicional = $homeSite->subtitulo_isntituicional;
        $this->descricao_isntituicional = $homeSite->descricao_isntituicional;
        $this->detalhes_isntituicional = $homeSite->detalhes_isntituicional;
        $this->titulo = $homeSite->titulo;
        $this->subtitulo = $homeSite->subtitulo;
        $this->homeSite_id = $homeSite->id;
        $this->descricao = $homeSite->descricao;
        $this->title = "Editar informações";
        $this->view = "edit";
    }

    public function default(){
        $this->image1 = "";
        $this->image2 = "";
        $this->image3 = "";
        $this->titulo_isntituicional = "";
        $this->subtitulo_isntituicional = "";
        $this->descricao_isntituicional = "";
        $this->detalhes_isntituicional = "";
        $this->titulo = "";
        $this->subtitulo = "";
        $this->descricao = "";
    }

    public function update($id){
        $homeSite = HomeSite::find($id);

        $image1 = $homeSite->image1;
        $image2 = $homeSite->image2;
        $image3 = $homeSite->image3;

        if ($this->image1) {
            $nameFile = "image1".".". $this->image1->getClientOriginalExtension();
            if($path = $this->image1->storeAs("home-site", $nameFile)){
                $image1 = $path;
            };
        }
        if ($this->image2) {
            $nameFile = "image2".".". $this->image2->getClientOriginalExtension();
            if($path = $this->image2->storeAs("home-site", $nameFile)){
                $image2 = $path;
            };
        }
        if ($this->image3) {
            $nameFile = "image3".".". $this->image3->getClientOriginalExtension();
            if($path = $this->image3->storeAs("home-site", $nameFile)){
                $image3 = $path;
            };
        }

        $homeSite->update([
            "image1" => $image1,
            "image2" => $image2,
            "image3" => $image3,
            "titulo_isntituicional" => $this->titulo_isntituicional,
            "subtitulo_isntituicional" => $this->subtitulo_isntituicional,
            "descricao_isntituicional" => $this->descricao_isntituicional,
            "detalhes_isntituicional" => $this->detalhes_isntituicional,
            "titulo" => $this->titulo,
            "subtitulo" => $this->subtitulo,
            "descricao" => $this->descricao,
        ]);

        $this->image1 = "";
        $this->image2 = "";
        $this->image3 = "";
        $this->titulo_isntituicional = "";
        $this->subtitulo_isntituicional = "";
        $this->descricao_isntituicional = "";
        $this->detalhes_isntituicional = "";
        $this->titulo = "";
        $this->subtitulo = "";
        $this->descricao = "";
    }
}
