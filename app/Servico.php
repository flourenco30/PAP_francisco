<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = [
        'nome', 'preco'
    ];

    public function caractetistica(){
        return $this::belongsToMany('App\Caracteristica');
    }
}
