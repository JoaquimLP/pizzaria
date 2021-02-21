<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;

class HomeSiteComponent extends Component
{
    public $image1, $image2, $image3, $titulo_isntituicional, $subtitulo_isntituicional;
    public $descricao_isntituicional, $titulo, $subtitulo, $descricao;
    public $view = "create";

    public function render()
    {
        return view('livewire.admin.home.home-site-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }
}
