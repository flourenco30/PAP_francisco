<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servico extends Model
{
    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable = [
        'nome', 'preco'
    ];

    public function caracteristica(){
        return $this::belongsToMany('App\Caracteristica');
    }
}
