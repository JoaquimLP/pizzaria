<?php

namespace App\Http\Livewire;

use App\Models\Banner;
use Livewire\Component;

class HomeComponent extends Component
{
    public $rota = "home";

    public function render()
    {
        $banner = Banner::first();
        $rota = $this->rota;
        return view('livewire.home-component', compact("rota", "banner"))
            ->extends('layouts.template')
            ->section('body');
    }
}
