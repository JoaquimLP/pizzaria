<?php

namespace App\Http\Livewire\Admin\Empresa;

use App\Models\Empresa;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Manny\Manny;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EmpresaComponet extends Component
{
    use WithFileUploads;

    public $view = 'create';
    public $title = 'Cadastar uma nova empresa';
    public $nav_ills = false;
    public $nav_edit = false;
    public $empresa_id;
    public $nome, $razao_social, $cnpj, $telefone, $celular, $endereco, $cidade, $bairro;
    public $numero, $complemento, $estado, $cep, $email, $link_facebook, $link_instagram, $logo;

    public function updated($field){
        if ($field == 'cnpj') {
            $this->cnpj = Manny::mask($this->cnpj, '11.111.111/1111-11');
        }elseif ($field == 'telefone') {
            $this->telefone = Manny::mask($this->telefone, '(11)1111-1111');
        }elseif ($field == 'celular') {
            $this->celular = Manny::mask($this->celular, '(11)11111-1111');
        }elseif ($field == 'cep') {
            $this->cep = Manny::mask($this->cep, '11111-111');
        }
    }

    public function render()
    {
        $empresa = Empresa::first();

        //$this->nav_ills = empty($empresa) ? true : false;
        $this->empresa_id = !empty($empresa) ? $empresa->id : 0;

        return view('livewire.admin.empresa.empresa-componet', compact('empresa'))
            ->extends('layouts.template.layout')
            ->section('body');
    }


    public function buscaCep(){
        $this->cep = str_replace(['-'], '', $this->cep);
        $url = "https://viacep.com.br/ws/";
        //curl_setopt($url, CURLOPT_SSL_VERIFYPEER, false);
        $response = Http::get($url.$this->cep."/json/");

        $this->cep = $response["cep"];
        $this->endereco = $response["logradouro"];
        $this->cidade = $response["localidade"];
        $this->bairro = $response["bairro"];
        $this->estado = $response["uf"];
    }

    public function store(){
        $this->validate([
            "nome" => "required|min:3|max:150",
            "razao_social" => "required|min:3|max:150",
            "cnpj" => "required|max:18",
            "telefone" => "required|max:15",
            "celular" =>  "required|max:15",
            "endereco" => "nullable|min:3|max:255",
            "cidade" => "nullable|min:3|max:50",
            "bairro" => "nullable|min:3|max:50",
            "numero" => "nullable|min:2|max:12",
            "complemento" => "nullable|min:3|max:50",
            "estado" => "nullable|min:2|max:50",
            "cep" => "nullable|min:3|max:11",
            "email" => "required|min:3|max:150",
            "link_facebook" => "nullable|min:3|max:150",
            "link_instagram" => "nullable|min:3|max:150",
            'logo' => 'nullable|image', // 1MB Max
        ]);

        $this->cnpj = str_replace(['.', '/', '-'], '', $this->cnpj);
        $this->telefone = str_replace(['(', ')', '-'], '', $this->telefone);
        $this->celular = str_replace(['(', ')', '-'], '', $this->celular);
        $this->cep = str_replace(['-'], '', $this->cep);

        $logo = null;

        if ($this->logo) {
            $nameFile = Str::slug($this->nome).".". $this->logo->getClientOriginalExtension();

            if($path = $this->logo->storeAs("empresa", $nameFile)){
                $logo = $path;
            };
        }

        Empresa::create([
            "nome" => $this->nome,
            "razao_social" => $this->razao_social,
            "cnpj" => $this->cnpj,
            "telefone" => $this->telefone,
            "celular" => $this->celular,
            "endereco" => $this->endereco,
            "cidade" => $this->cidade,
            "bairro" => $this->bairro,
            "numero" => $this->numero,
            "complemento" => $this->complemento,
            "estado" => $this->estado,
            "cep" => $this->cep,
            "email" => $this->email,
            "link_facebook" => $this->link_facebook,
            "link_instagram" => $this->link_instagram,
            "logo" => $logo,
        ]);

        $this->nome = "";
        $this->razao_social = "";
        $this->cnpj = "";
        $this->telefone = "";
        $this->celular = "";
        $this->endereco = "";
        $this->cidade = "";
        $this->bairro = "";
        $this->numero = "";
        $this->complemento = "";
        $this->estado = "";
        $this->cep = "";
        $this->email = "";
        $this->link_facebook = "";
        $this->link_instagram = "";
        $this->nav_ills = false;
    }

    public function edit($id){

        $empresa = Empresa::find($id);
        $this->nome = $empresa->nome;
        $this->razao_social = $empresa->razao_social;
        $this->cnpj =  maskCnpj($empresa->cnpj);
        $this->telefone =  maskTelefone($empresa->telefone);
        $this->celular =  maskTelefone($empresa->celular);
        $this->endereco =  $empresa->endereco;
        $this->cidade =  $empresa->cidade;
        $this->bairro =  $empresa->bairro;
        $this->numero =  $empresa->numero;
        $this->complemento =  $empresa->complemento;
        $this->estado =  $empresa->estado;
        $this->cep =  maskCep($empresa->cep);
        $this->email =  $empresa->email;
        $this->link_facebook =  $empresa->link_facebook;
        $this->link_instagram =  $empresa->link_instagram;
        $this->view = 'edit';
        $this->nav_ills = true;
    }

    public function default(){
        $this->nome = "";
        $this->razao_social = "";
        $this->cnpj = "";
        $this->telefone = "";
        $this->celular = "";
        $this->endereco = "";
        $this->cidade = "";
        $this->bairro = "";
        $this->numero = "";
        $this->complemento = "";
        $this->estado = "";
        $this->cep = "";
        $this->email = "";
        $this->link_facebook = "";
        $this->link_instagram = "";
        $this->nav_ills = false;
    }

    public function update($id){
        $empresa = Empresa::find($id);

        $this->validate([
            "nome" => "required|min:3|max:150",
            "razao_social" => "required|min:3|max:150",
            "cnpj" => "required|max:18",
            "telefone" => "required|max:15",
            "celular" =>  "required|max:15",
            "endereco" => "nullable|min:3|max:255",
            "cidade" => "nullable|min:3|max:50",
            "bairro" => "nullable|min:3|max:50",
            "numero" => "nullable|min:2|max:12",
            "complemento" => "nullable|min:3|max:50",
            "estado" => "nullable|min:2|max:50",
            "cep" => "nullable|min:3|max:11",
            "email" => "required|min:3|max:150",
            "link_facebook" => "nullable|min:3|max:150",
            "link_instagram" => "nullable|min:3|max:150",
            'logo' => 'nullable|image', // 1MB Max
        ]);
        
        $this->cnpj = str_replace(['.', '/', '-'], '', $this->cnpj);
        $this->telefone = str_replace(['(', ')', ' ', '-'], '', $this->telefone);
        $this->celular = str_replace(['(', ')', ' ', '-'], '', $this->celular);
        $this->cep = str_replace(['-'], '', $this->cep);

        $logo = $empresa->logo;
        if ($this->logo != null) {
            $nameFile = Str::slug($this->nome).".". $this->logo->getClientOriginalExtension();

            if($path = $this->logo->storeAs("empresa", $nameFile)){
                $logo = $path;
            };
        }



        if ($empresa) {
            $empresa->update([
                "nome" => $this->nome,
                "razao_social" => $this->razao_social,
                "cnpj" => $this->cnpj,
                "telefone" => $this->telefone,
                "celular" => $this->celular,
                "endereco" => $this->endereco,
                "cidade" => $this->cidade,
                "bairro" => $this->bairro,
                "numero" => $this->numero,
                "complemento" => $this->complemento,
                "estado" => $this->estado,
                "cep" => $this->cep,
                "email" => $this->email,
                "link_facebook" => $this->link_facebook,
                "link_instagram" => $this->link_instagram,
                "logo" => $logo,
            ]);
        }

        $this->nome = "";
        $this->razao_social = "";
        $this->cnpj = "";
        $this->telefone = "";
        $this->celular = "";
        $this->endereco = "";
        $this->cidade = "";
        $this->bairro = "";
        $this->numero = "";
        $this->complemento = "";
        $this->estado = "";
        $this->cep = "";
        $this->email = "";
        $this->logo = "";
        $this->link_facebook = "";
        $this->link_instagram = "";
        $this->nav_ills = false;
    }
}
