<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuemSomosComponent extends Component
{
    public function render()
    {
        return view('livewire.quem-somos-component')
            ->extends('layouts.template')
            ->section('body');
    }
}
