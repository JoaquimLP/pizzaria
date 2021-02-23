<?php

namespace App\Http\Livewire\Admin\Site;

use Livewire\Component;

class BannerSiteComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.site.banner-site-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }
}
