<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable =
        [
            "foto_banners1", "foto_banners2", "foto_banners3", "title_banners1", "title_banners2", "title_banners3",
            "legenda_banners1", "legenda_banners2", "legenda_banners3",
        ];
}
