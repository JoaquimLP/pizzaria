<?php

namespace App\Http\Livewire\Admin\Site;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class BannerSiteComponent extends Component
{
    use WithFileUploads;

    public $foto_banners1, $foto_banners2, $foto_banners3, $title_banners1, $title_banners2, $title_banners3;
    public $legenda_banners1, $legenda_banners2, $legenda_banners3, $banner, $banner_id;
    public $view = "create";

    public function render()
    {
        $this->banner = Banner::first();
        return view('livewire.admin.site.banner-site-component')
            ->extends('layouts.template.layout')
            ->section('body');
    }

    public function store(){
        $this->validate([
            "foto_banners1"  => 'required|image|max:1024',
            "foto_banners2"  => 'nullable|image|max:1024',
            "foto_banners3"  => 'nullable|image|max:1024',
            "title_banners1" => "required|min:3|max:150",
            "title_banners2" => "nullable|min:3|max:150",
            "title_banners3" => "nullable|min:3|max:150",
            "legenda_banners1" => "required|min:3|max:150",
            "legenda_banners2" => "nullable|min:3|max:150",
            "legenda_banners3" => "nullable|min:3|max:150",
        ]);

        $foto_banners1 = null;
        $foto_banners2 = null;
        $foto_banners3 = null;

        if ($this->foto_banners1) {
            $nameFile = "foto_banners1".".". $this->foto_banners1->getClientOriginalExtension();
            if($path = $this->foto_banners1->storeAs("home-site", $nameFile)){
                $foto_banners1 = $path;
            };
        }
        if ($this->foto_banners2) {
            $nameFile = "foto_banners2".".". $this->foto_banners2->getClientOriginalExtension();
            if($path = $this->foto_banners2->storeAs("home-site", $nameFile)){
                $foto_banners2 = $path;
            };
        }
        if ($this->foto_banners3) {
            $nameFile = "foto_banners3".".". $this->foto_banners3->getClientOriginalExtension();
            if($path = $this->foto_banners3->storeAs("home-site", $nameFile)){
                $foto_banners3 = $path;
            };
        }

        Banner::create([
            "foto_banners1" => $foto_banners1,
            "foto_banners2" => $foto_banners2,
            "foto_banners3" => $foto_banners3,
            "title_banners1" => $this->title_banners1,
            "title_banners2" => $this->title_banners2,
            "title_banners3" => $this->title_banners3,
            "legenda_banners1" => $this->legenda_banners1,
            "legenda_banners2" => $this->legenda_banners2,
            "legenda_banners3" => $this->legenda_banners3,
        ]);

        $this->foto_banners1 = "";
        $this->foto_banners2 = "";
        $this->foto_banners3 = "";
        $this->title_banners1 = "";
        $this->title_banners2 = "";
        $this->title_banners3 = "";
        $this->legenda_banners1 = "";
        $this->legenda_banners2 = "";
        $this->legenda_banners3 = "";
    }

    public function default(){
        $this->foto_banners1 = "";
        $this->foto_banners2 = "";
        $this->foto_banners3 = "";
        $this->title_banners1 = "";
        $this->title_banners2 = "";
        $this->title_banners3 = "";
        $this->legenda_banners1 = "";
        $this->legenda_banners2 = "";
        $this->legenda_banners3 = "";
        $this->view = "create";
    }

    public function edit($id){
        $banner = Banner::find($id);

        $this->title_banners1 =  $banner->title_banners1;
        $this->title_banners2 =  $banner->title_banners2;
        $this->title_banners3 =  $banner->title_banners3;
        $this->legenda_banners1 =  $banner->legenda_banners1;
        $this->legenda_banners2 =  $banner->legenda_banners1;
        $this->legenda_banners3 =  $banner->legenda_banners1;
        $this->banner_id =  $banner->id;
        $this->view = "edit";
    }

    public function update($id){
        $banner = Banner::find($id);

        $this->validate([
            "foto_banners1"  => 'nullable|image|max:1024',
            "foto_banners2"  => 'nullable|image|max:1024',
            "foto_banners3"  => 'nullable|image|max:1024',
            "title_banners1" => "nullable|min:3|max:150",
            "title_banners2" => "nullable|min:3|max:150",
            "title_banners3" => "nullable|min:3|max:150",
            "legenda_banners1" => "nullable|min:3|max:150",
            "legenda_banners2" => "nullable|min:3|max:150",
            "legenda_banners3" => "nullable|min:3|max:150",
        ]);

        $foto_banners1 = $banner->foto_banners1;
        $foto_banners2 = $banner->foto_banners2;
        $foto_banners3 = $banner->foto_banners3;

        if ($this->foto_banners1) {
            $nameFile = "foto_banners1".".". $this->foto_banners1->getClientOriginalExtension();
            if($path = $this->foto_banners1->storeAs("home-site", $nameFile)){
                $foto_banners1 = $path;
            };
        }
        if ($this->foto_banners2) {
            $nameFile = "foto_banners2".".". $this->foto_banners2->getClientOriginalExtension();
            if($path = $this->foto_banners2->storeAs("home-site", $nameFile)){
                $foto_banners2 = $path;
            };
        }
        if ($this->foto_banners3) {
            $nameFile = "foto_banners3".".". $this->foto_banners3->getClientOriginalExtension();
            if($path = $this->foto_banners3->storeAs("home-site", $nameFile)){
                $foto_banners3 = $path;
            };
        }

        $banner->update([
            "foto_banners1" => $foto_banners1,
            "foto_banners2" => $foto_banners2,
            "foto_banners3" => $foto_banners3,
            "title_banners1" => $this->title_banners1,
            "title_banners2" => $this->title_banners2,
            "title_banners3" => $this->title_banners3,
            "legenda_banners1" => $this->legenda_banners1,
            "legenda_banners2" => $this->legenda_banners2,
            "legenda_banners3" => $this->legenda_banners3,
        ]);

        $this->foto_banners1 = "";
        $this->foto_banners2 = "";
        $this->foto_banners3 = "";
        $this->title_banners1 = "";
        $this->title_banners2 = "";
        $this->title_banners3 = "";
        $this->legenda_banners1 = "";
        $this->legenda_banners2 = "";
        $this->legenda_banners3 = "";
        $this->view = "create";
    }
}
