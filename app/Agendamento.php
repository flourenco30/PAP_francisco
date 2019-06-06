<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    public function user(){
        return $this->belongsTo('App\models\User','user_id');
    }

    public function servico(){
        return $this->belongsTo('App\Servico','servi_id');
    }

    public function livre($data, $hora){
        $records = Agendamento::where('Data', '=', $data)->where('Hora', '=', $hora)->count();
        if($records){
            return false;
        }
        return true;
    }
}
