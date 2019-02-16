<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient','date','hour','description','doctor_id'
    ];

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
