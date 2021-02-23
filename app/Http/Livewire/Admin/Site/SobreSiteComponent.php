<?php

namespace App\Http\Livewire\Admin\Site;

use Livewire\Component;

class SobreSiteComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.site.sobre-site-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }
}
