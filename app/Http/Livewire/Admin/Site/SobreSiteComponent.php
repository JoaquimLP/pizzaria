<?php

namespace App\Http\Livewire\Admin\Site;

use App\Models\Sobre;
use Livewire\Component;
use Livewire\WithFileUploads;

class SobreSiteComponent extends Component
{
    use WithFileUploads;

    public $view = "create";
    public $title, $paragrafo1, $paragrafo2, $paragrafo3, $paragrafo4, $paragrafo5, $image;
    public $sobre, $sobre_id;

    public function render()
    {
        $this->sobre = Sobre::first();
        return view('livewire.admin.site.sobre-site-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }

    public function default(){
        $this->title = "";
        $this->paragrafo1 = "";
        $this->paragrafo2 = "";
        $this->paragrafo3 = "";
        $this->paragrafo4 = "";
        $this->paragrafo5 = "";
        $this->image = "";
        $this->view = "create";
    }

    public function store(){
        $this->validate([
            "title" => "required|min:3|max:50",
            "paragrafo1" => "required|min:3|max:500",
            "paragrafo2" => "required|min:3|max:500",
            "paragrafo3" => "required|min:3|max:500",
            "paragrafo4" => "required|min:3|max:500",
            "paragrafo5" => "required|min:3|max:500",
            "image" => 'required|image|max:1024',
        ]);

        $image = null;

        if ($this->image) {
            $nameFile = "image".".". $this->image->getClientOriginalExtension();
            if($path = $this->image->storeAs("home-site", $nameFile)){
                $image = $path;
            };
        }

        Sobre::create([
            "title" => $this->title,
            "paragrafo1" => $this->paragrafo1,
            "paragrafo2" => $this->paragrafo2,
            "paragrafo3" => $this->paragrafo3,
            "paragrafo4" => $this->paragrafo4,
            "paragrafo5" => $this->paragrafo5,
            "image" => $image,
        ]);

        $this->title = "";
        $this->paragrafo1 = "";
        $this->paragrafo2 = "";
        $this->paragrafo3 = "";
        $this->paragrafo4 = "";
        $this->paragrafo5 = "";
        $this->image = "";
    }

    public function edit($id){
        $sobre = Sobre::find($id);

        $this->title = $sobre->title;
        $this->paragrafo1 = $sobre->paragrafo1;
        $this->paragrafo2 = $sobre->paragrafo2;
        $this->paragrafo3 = $sobre->paragrafo3;
        $this->paragrafo4 = $sobre->paragrafo4;
        $this->paragrafo5 = $sobre->paragrafo5;
        $this->sobre_id = $sobre->id;
        $this->view = "edit";
    }

    public function update($id){
        $sobre = Sobre::find($id);
        $this->validate([
            "title" => "required|min:3|max:50",
            "paragrafo1" => "required|min:3|max:500",
            "paragrafo2" => "required|min:3|max:500",
            "paragrafo3" => "required|min:3|max:500",
            "paragrafo4" => "required|min:3|max:500",
            "paragrafo5" => "required|min:3|max:500",
            "image" => 'nullable|image|max:1024',
            ]);

        $image = $sobre->image;

        if ($this->image) {
            $nameFile = "image".".". $this->image->getClientOriginalExtension();
            if($path = $this->image->storeAs("home-site", $nameFile)){
                $image = $path;
            };
        }

        $sobre->update([
            "title" => $this->title,
            "paragrafo1" => $this->paragrafo1,
            "paragrafo2" => $this->paragrafo2,
            "paragrafo3" => $this->paragrafo3,
            "paragrafo4" => $this->paragrafo4,
            "paragrafo5" => $this->paragrafo5,
            "image" => $image,
        ]);


        $this->title = "";
        $this->paragrafo1 = "";
        $this->paragrafo2 = "";
        $this->paragrafo3 = "";
        $this->paragrafo4 = "";
        $this->paragrafo5 = "";
        $this->image = "";
        return redirect()->back();
    }
}
