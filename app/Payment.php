<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'monto','fecha','tratamiento','patient_id'
    ];
    public function patient(){
        $this->belongsTo('App\Patient');
    }
}
