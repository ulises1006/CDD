<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'name','address','city','state','age','birthday','parent','phone','sex','occupation','doctor_id'
    ];

    public function hystories(){
        return $this->hasMany('App\History');
    }

    public function pagos(){
        return $this->hasMany('App\Pago');
    }

    public function treatments(){
        return $this->hasMany('App\Treatment');
    }
}
