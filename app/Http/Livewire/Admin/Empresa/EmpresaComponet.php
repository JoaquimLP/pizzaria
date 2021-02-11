<?php

namespace App\Http\Livewire\Admin\Empresa;

use App\Models\Empresa;
use Livewire\Component;

class EmpresaComponet extends Component
{
    public $view = 'create';
    public $title = 'Adicionar um novo Produto';
    public $nav_ills = false;

    public function render()
    {
        $empresa = Empresa::first();
        $this->nav_ills = empty($empresa) ? true : false;

        return view('livewire.admin.empresa.empresa-componet', compact('empresa'))
            ->extends('layouts.template.layout')
            ->section('body');
    }
}
