<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicoCustom extends Model
{
    public function caracteristica(){
        return $this::belongsToMany('App\Caracteristica');
    }
}
