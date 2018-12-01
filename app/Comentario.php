<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'id','comentario','usuario_id','produto_id','created_at','updated_at'
    ];
    protected $casts = [
        'created_at' => 'date:d/m/Y H:m',
        'updated_at' => 'date:d/m/Y',
    ];
}
