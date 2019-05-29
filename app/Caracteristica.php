<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $fillable = [
        'desc', 'preco'
    ];

    public function servico(){
        return $this::belongsToMany('App\Servico');
    }
    public function servico_custom(){
        return $this::belongsToMany('App\Servico_Custom');
    }
}
