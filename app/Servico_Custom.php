<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico_Custom extends Model
{
    public function caracteristica(){
        return $this::belongsToMany('App\Caracteristica');
    }
}
