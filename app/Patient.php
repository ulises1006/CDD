<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name','address','city','state','age','birthday','parent','phone','sex','occupation'
    ];

    public function hystories(){
        $this->hasMany('App\History');
    }

    public function pagos(){
        return $this->hasMany('App\Pago');
    }

    public function treatments(){
        $this->hasMany('App\Treatment');
    }
}
