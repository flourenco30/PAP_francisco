<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    public function user(){
        return $this->belongsTo('App\models\User','user_id');
    }
}
