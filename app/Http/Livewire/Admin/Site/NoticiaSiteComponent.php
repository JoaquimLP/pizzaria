<?php

namespace App\Http\Livewire\Admin\Site;

use Livewire\Component;

class NoticiaSiteComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.site.noticia-site-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }
}
