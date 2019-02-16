<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 'correo', 'phone',
    ];

    public function appointments(){
        $this->hasMany('App\Appointment');
    }
    public function recipes(){
        $this->hasMany('App\Recipe');
    }
    public function pagos(){
        $this->hasMany('App\Pago');
    }
}
