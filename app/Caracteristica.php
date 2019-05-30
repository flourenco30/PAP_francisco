<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caracteristica extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'desc', 'preco'
    ];

    protected $dates=['deleted_at'];

    public function servico(){
        return $this::belongsToMany('App\Servico');
    }
    public function servico_custom(){
        return $this::belongsToMany('App\Servico_Custom');
    }
}
