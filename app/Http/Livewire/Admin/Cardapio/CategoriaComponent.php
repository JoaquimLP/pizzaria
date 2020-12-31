<?php

namespace App\Http\Livewire\Admin\Cardapio;

use Livewire\Component;

class CategoriaComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.cardapio.categoria-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }
}
