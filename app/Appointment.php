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

     //Query Scopes
     public function scopeName($query, $name){
        if($name)
            return $query->where('patient','LIKE',"%$name%");
    }
}
