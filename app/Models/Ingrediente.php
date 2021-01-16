<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', "quantidade", "categoria_id", "unidade_id"];

    public function categoria(){
        return $this->hasOne(Categoria::class, "id", "categoria_id");
    }

    public function unidade(){
        return $this->hasOne(Unidade::class, "id", "unidade_id");
    }

}
