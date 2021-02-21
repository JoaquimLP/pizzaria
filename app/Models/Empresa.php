<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable =
        [
            "nome", "razao_social", "cnpj", "telefone", "celular", "endereco",
            "cidade", "bairro", "numero", "complemento", "estado", "cep", "email",
            "link_facebook", "link_instagram", "logo"
        ];
}
