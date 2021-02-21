<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSite extends Model
{
    use HasFactory;

    protected $fillable =
    [
        "image1", "image2", "image3", "titulo_isntituicional", "subtitulo_isntituicional", "descricao_isntituicional",
        "titulo", "subtitulo", "descricao",
    ];
}
