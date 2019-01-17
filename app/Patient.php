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

    public function payments(){
        $this->hasMany('App\Payment');
    }

    public function treatments(){
        $this->hasMany('App\Treatment');
    }
}
