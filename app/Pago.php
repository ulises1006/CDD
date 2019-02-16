<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'monto','fecha','tratamiento','patient_id','doctor_id'
    ];
    public function patient(){
        return $this->belongsTo('App\Patient');
    }
    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
