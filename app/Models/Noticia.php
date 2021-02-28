<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ["title","resumo","autor","paragrafo1","paragrafo2","paragrafo3","paragrafo4",
            "paragrafo5","image", "link_outro_site", "publicar", "data_encerramento"];
}
