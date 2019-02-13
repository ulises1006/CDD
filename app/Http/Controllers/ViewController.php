<?php

namespace App\Http\Controllers;
use App\History;
use App\Patient;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ver($id){
        $history = History::where('id', $id)->first();
        if($history){
            $patient = Patient::where('id', $id)->first();
            return view('history.show',compact('history','patient'));
        }
        else{
            return view('history.create',compact('id'));
        }
    }
}
