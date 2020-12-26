<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContatosComponent extends Component
{
    public function render()
    {
        return view('livewire.contatos-component')
            ->extends('layouts.template')
            ->section('body');
    }
}
