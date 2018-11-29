<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoAlteracoes extends Model
{
    protected $fillable = [
        'produto_id','nome','preco','descricao'
    ];
}
