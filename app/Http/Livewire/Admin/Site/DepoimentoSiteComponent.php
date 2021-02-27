<?php

namespace App\Http\Livewire\Admin\Site;

use App\Models\Depoimento;
use Livewire\Component;
use Livewire\WithFileUploads;

class DepoimentoSiteComponent extends Component
{
    use WithFileUploads;

    public $view = "create";
    public $nav_ills = false;
    public $title = "Cadastrar";
    public $nome, $origen, $depoimento, $path;
    public $depoimentos, $depoimento_id;

    public function render()
    {
        $this->depoimentos = Depoimento::all();
        return view('livewire.admin.site.depoimento-site-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }

    public function create(){
        $this->nome = "";
        $this->origen = "";
        $this->depoimento = "";
        $this->path = "";
        $this->nav_ills = true;
        $this->title = "Cadastrar";

        return redirect()
                    ->back();

    }
    public function default(){
        $this->nome = "";
        $this->origen = "";
        $this->depoimento = "";
        $this->path = "";
        $this->nav_ills = false;
        $this->title = "Cadastrar";
        return redirect()
                    ->back();

    }

    public function store(){
        $this->validate([
            "nome" => "required|min:3|max:50",
            "origen" => "required|min:3|max:50",
            "depoimento" => "required|min:3|max:250",
            "path" => 'required|image|max:1024'
        ]);

        $path = null;

        if ($this->path) {
            $nameFile = "path".$this->nome.".". $this->path->getClientOriginalExtension();
            if($path = $this->path->storeAs("home-site", $nameFile)){
                $path = $path;
            };
        }

        Depoimento::create([
            "nome" => $this->nome,
            "origen" => $this->origen,
            "depoimento" => $this->depoimento,
            "path" => $path,
        ]);

        $this->nome = "";
        $this->origen = "";
        $this->depoimento = "";
        $this->path = "";
        $this->nav_ills = false;
        return redirect()
                    ->back();
    }

    public function edit($id){
        $depoimento = Depoimento::find($id);

        if ($depoimento) {
            $this->nome = $depoimento->nome;
            $this->origen = $depoimento->origen;
            $this->depoimento = $depoimento->depoimento;
            $this->depoimento_id = $depoimento->id;
            $this->view = "edit";
            $this->nav_ills = true;
            $this->title = "Editar";
        }
    }

    public function update($id){
        $depoimento = Depoimento::find($id);

        $path = $depoimento->path;

        if ($this->path) {
            $nameFile = "path".$this->nome.".". $this->path->getClientOriginalExtension();
            if($path = $this->path->storeAs("home-site", $nameFile)){
                $path = $path;
            };
        }

        if ($depoimento) {
            $depoimento->update([
                "nome" => $this->nome,
                "origen" => $this->origen,
                "depoimento" => $this->depoimento,
                "path" => $path,
            ]);
        }

        $this->nome = "";
        $this->origen = "";
        $this->depoimento = "";
        $this->path = "";
        $this->view = "create";
        $this->nav_ills = false;

        return redirect()
                    ->back();
    }

    public function destroy($id){
        Depoimento::destroy($id);
    }


}
