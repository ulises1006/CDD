<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name','address','city','state','age','birthday','parent','phone','sex','occupation'
    ];

    public function hystories(){
        return $this->hasMany('App\History');
    }

    public function pagos(){
        return $this->hasMany('App\Pago');
    }

    public function treatments(){
        return $this->hasMany('App\Treatment');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }

    //Query Scopes
    public function scopeName($query, $name){
        if($name)
            return $query->where('name','LIKE',"%$name%");
    }
}
