<?php

namespace App\Http\Livewire\Admin\Empresa;

use Livewire\Component;

class EmpresaComponet extends Component
{
    public function render()
    {
        return view('livewire.admin.empresa.empresa-componet')
            ->extends('layouts.template.layout')
            ->section('body');
    }
}
