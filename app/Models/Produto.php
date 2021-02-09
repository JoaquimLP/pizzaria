<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = 
        [
            "nome", "preco_pequena", "preco_media", "preco_grande", "preco_gigante", 
            "preco", "promocao", "preco_promocao_pequena", "preco_promocao_media", 
            "preco_promocao_grande", "preco_promocao_gigante", "preco_promocao", 
            "categoria_id", "detalhes", "descricao", "qtd_fatia_pequena", "qtd_fatia_media", 
            "qtd_fatia_grande", "qtd_fatia_gigante", 
        ];
            
    public function categoria(){
        return $this->hasOne(Categoria::class, "id", "categoria_id" );
    }
}
