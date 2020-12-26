<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public $rota = "home";
    
    public function render()
    {
        $rota = $this->rota;
        return view('livewire.home-component', compact("rota"))
            ->extends('layouts.template')
            ->section('body');
    }
}
