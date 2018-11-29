<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'loja_id','subcategoria_id','nome','preco','img','descricao','promocao','desconto'
    ];
}
