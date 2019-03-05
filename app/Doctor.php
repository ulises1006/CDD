<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 'correo', 'phone',
    ];

    public function appointments(){
        return $this->hasMany('App\Appointment');
    }
    public function patients(){
        return $this->hasMany('App\Patient');
    }
    public function recipes(){
        return $this->hasMany('App\Recipe');
    }
    public function pagos(){
        return $this->hasMany('App\Pago');
    }
}
