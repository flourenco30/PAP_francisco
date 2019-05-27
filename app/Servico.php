<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    public function caractetistica(){
        return $this::belongsToMany('App\Caracteristica');
    }
}
