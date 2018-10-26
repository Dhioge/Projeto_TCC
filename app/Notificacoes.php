<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacoes extends Model
{
    protected $fillable = [
        'id','texto','titulo','tipo','destinatario','usuario_id','created_at','updated_at',
    ];
}
