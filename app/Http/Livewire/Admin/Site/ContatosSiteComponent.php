<?php

namespace App\Http\Livewire\Admin\Site;

use Livewire\Component;

class ContatosSiteComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.site.contatos-site-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }
}
