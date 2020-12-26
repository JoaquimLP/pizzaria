<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardapioComponent extends Component
{
    public function render()
    {
        return view('livewire.cardapio-component')
            ->extends('layouts.template')
            ->section('body');
    }
}
