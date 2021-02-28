<?php

namespace App\Http\Livewire\Admin\Site;

use App\Models\Noticia;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class NoticiaSiteComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $view = "create";
    public $outroSite = false;
    public $mudar;
    public $nav_ills = false;
    public $message;
    public $titles = "Cadastrar";
    public $title, $resumo, $autor, $paragrafo1, $paragrafo2, $paragrafo3, $paragrafo4, $paragrafo5, $image, $link_outro_site;
    public $noticia_id;

    public function render()
    {
        $noticias = Noticia::orderBy('id', 'desc')->simplePaginate(6);
        return view('livewire.admin.site.noticia-site-component', compact("noticias"))
            ->extends('layouts.template.layout')
            ->section('body');
    }

    public function create(){
        $this->title = "";
        $this->resumo = "";
        $this->autor = "";
        $this->paragrafo1 = "";
        $this->paragrafo2 = "";
        $this->paragrafo3 = "";
        $this->paragrafo4 = "";
        $this->paragrafo5 = "";
        $this->link_outro_site = "";
        $this->image = "";
        $this->nav_ills = true;
        $this->titles = "Cadastrar";

    }
    public function default(){

        $this->title = "";
        $this->resumo = "";
        $this->autor = "";
        $this->paragrafo1 = "";
        $this->paragrafo2 = "";
        $this->paragrafo3 = "";
        $this->paragrafo4 = "";
        $this->paragrafo5 = "";
        $this->link_outro_site = "";
        $this->image = "";
        $this->nav_ills = false;
        $this->titles = "Cadastrar";

    }

    public function mudarSite() {
        if ($this->mudar == 1) {
            $this->outroSite = true;
        }else{
            $this->outroSite = false;
        }
        $this->nav_ills = true;
    }

    public function store() {
        $noticia = Noticia::where("title", $this->title)->first();
        
        $this->validate([
            "title" => "required|min:3|max:50",
            "resumo" => "required|min:3|max:200",
            "autor" => "nullable|min:3|max:50",
            "link_outro_site" => "nullable|min:3|max:255",
            "paragrafo1" => "nullable|min:3|max:600",
            "paragrafo2" => "nullable|min:3|max:600",
            "paragrafo3" => "nullable|min:3|max:600",
            "paragrafo4" => "nullable|min:3|max:600",
            "paragrafo5" => "nullable|min:3|max:600",
            "image" => 'required|image|max:1024'
        ]);

        if (!$noticia) {
            $image = null;

            if ($this->image) {
                $nameFile = "image".Str::slug($this->title).".". $this->image->getClientOriginalExtension();
                if($image = $this->image->storeAs("noticias", $nameFile)){
                    $image = $image;
                };
            }

            Noticia::create([
                "title" => $this->title,
                "resumo" => $this->resumo,
                "autor" => $this->autor,
                "paragrafo1" => $this->paragrafo1,
                "paragrafo2" => $this->paragrafo2,
                "paragrafo3" => $this->paragrafo3,
                "paragrafo4" => $this->paragrafo4,
                "paragrafo5" => $this->paragrafo5,
                "publicar" => "N",
                "link_outro_site" => $this->link_outro_site ?? null,
                "image" => $image,
            ]);

            $this->title = "";
            $this->resumo = "";
            $this->autor = "";
            $this->paragrafo1 = "";
            $this->paragrafo2 = "";
            $this->paragrafo3 = "";
            $this->paragrafo4 = "";
            $this->paragrafo5 = "";
            $this->link_outro_site = "";
            $this->image = "";
            $this->nav_ills = false;
            $this->message = "";
        }else{
            $this->message = "Já existe uma noticia cadastrado com esse titulo";
        }


    }

    public function edit($id) {
        $noticia = Noticia::find($id);

        if ($noticia) {
            $this->title = $noticia->title;
            $this->resumo = $noticia->resumo;
            $this->autor = $noticia->autor;
            $this->link_outro_site = $noticia->link_outro_site;
            $this->paragrafo1 = $noticia->paragrafo1;
            $this->paragrafo2 = $noticia->paragrafo2;
            $this->paragrafo3 = $noticia->paragrafo3;
            $this->paragrafo4 = $noticia->paragrafo4;
            $this->paragrafo5 = $noticia->paragrafo5;
            $this->noticia_id = $noticia->id;

            if ($noticia->link_outro_site) {
                $this->outroSite = true;
            }else{
                $this->outroSite = false;
            }

            $this->nav_ills = true;
            $this->titles = "Editar";
            $this->view = "edit";
        }
    }

    public function update($id) {
        $noticia = Noticia::find($id);

        $image = $noticia->image;

        if ($this->image) {
            $nameFile = "image".Str::slug($this->title).".". $this->image->getClientOriginalExtension();
            if($image = $this->image->storeAs("home-site", $nameFile)){
                $image = $image;
            };
        }
        if ($noticia) {
            $noticia->update([
                "title" => $this->title,
                "resumo" => $this->resumo,
                "autor" => $this->autor,
                "paragrafo1" => $this->paragrafo1,
                "paragrafo2" => $this->paragrafo2,
                "paragrafo3" => $this->paragrafo3,
                "paragrafo4" => $this->paragrafo4,
                "paragrafo5" => $this->paragrafo5,
                "image" => $image,
            ]);
        }

        $this->title = "";
        $this->resumo = "";
        $this->autor = "";
        $this->paragrafo1 = "";
        $this->paragrafo2 = "";
        $this->paragrafo3 = "";
        $this->paragrafo4 = "";
        $this->paragrafo5 = "";
        $this->link_outro_site = "";
        $this->image = "";
        $this->nav_ills = false;
        $this->titles = "Cadastrar";
    }

    public function destroy($id){
        Noticia::destroy($id);
        $this->nav_ills = false;
    }
}
