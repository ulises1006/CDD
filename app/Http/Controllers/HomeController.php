<?php

namespace App\Http\Controllers;
use Auth;
use App\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $dia = date('d');
        $m = date('M');
        if ($m == 'Jan'){
            $mes='Enero';
        }else if ($m == 'Feb'){
            $mes='Febrero';
        }else if ($m == 'Mar'){
            $mes='Marzo';
        }else if ($m == 'Apr'){
            $mes='Abril';
        }else if ($m == 'May'){
            $mes='Mayo';
        }else if ($m == 'Jun'){
            $mes='Junio';
        }else if ($m == 'Jul'){
            $mes='Julio';
        }else if ($m == 'Aug'){
            $mes='Agosto';
        }else if ($m == 'Sep'){
            $mes='Septiembre';
        }else if ($m == 'Oct'){
            $mes='Octubre';
        }else if ($m == 'Nov'){
            $mes='Noviembre';
        }else if ($m == 'Dec'){
            $mes='Diciembre';
        }

        $anio = date('Y');
        $fecha = date('Y-m-d');
        $doctor = Auth::user()->id;
        if(Auth::user()->role == "secretaria"){
            $appointmentsB = Appointment::where(array('doctor_id'=>1,'date'=>$fecha))->orderBy('hour', 'asc')->get();
            $appointmentsS = Appointment::where(array('doctor_id'=>2,'date'=>$fecha))->orderBy('hour', 'asc')->get(); 
            return view('home', compact('dia','mes','anio','fecha','appointmentsB','appointmentsS'));
        }else{
            $appointments = Appointment::where(array('doctor_id'=>$doctor,'date'=>$fecha))->orderBy('hour', 'asc')->get();
            return view('home', compact('dia','mes','anio','fecha','appointments'));
        }
        
    }
}
