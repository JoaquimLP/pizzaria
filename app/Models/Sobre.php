<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
    use HasFactory; //

    protected $fillable =
        [
            "subtittulo", "title", "paragrafo1", "paragrafo2", "paragrafo3", "paragrafo4", "paragrafo5", "image"
        ];
}
