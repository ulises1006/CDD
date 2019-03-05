<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name_patient','fecha','medicamento','doctor_id'
    ];

    public function doctor(){
       return $this->belongsTo('App\Doctor');
    }
}
