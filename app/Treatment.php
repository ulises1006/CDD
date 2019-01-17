<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['description','price','patient_id','status'];

    public function patient(){
        $this->belongsTo('App\Patient');
    }
}
