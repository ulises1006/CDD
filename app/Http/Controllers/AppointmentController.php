<?php

namespace App\Http\Controllers;

use App\Appointment;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use Calendar;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rol = Auth::user()->role;
        if($rol == 'doctor'){
            $appointmentsB = Appointment::where('doctor_id', 1)->name($request->nombre)->get();
            $appointmentsS = Appointment::where('doctor_id', 2)->name($request->nombre)->get();
            $appointments = Appointment::where('doctor_id', Auth::user()->id)->name($request->nombre)->get();
            return view('appointment.index',compact('appointments','appointmentsB','appointmentsS','rol'));
        }else{
            $appointments = Appointment::where('doctor_id', Auth::user()->id)->name($request->nombre)->get();
            $appointmentsB = Appointment::where('doctor_id', 1)->name($request->nombre)->get();
            $appointmentsS = Appointment::where('doctor_id', 2)->name($request->nombre)->get();
            return view('appointment.index',compact('appointments','appointmentsB','appointmentsS','rol'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor_id;
        if(Auth::user()->role == "secretaria"){
            $doctor_id = $request->doctor;
        }else{
            $doctor_id = Auth::user()->id;
        }
        
        $this->validate($request,[
            'paciente' => 'required | string',
            'fecha' => 'required | date',
            'hora' => 'required | string',
            'descripcion' => 'required | string',
        ]);
        $minutoAnadir=30;
        $segundos_horaInicial=strtotime($request->hora);
        $segundos_minutoAnadir=$minutoAnadir*60;
        $nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
        
        $checkHour = Appointment::where(array('date'=>$request->fecha,'hour'=>$request->hora,'doctor_id'=>$doctor_id))->get();
        
        if($checkHour->isEmpty()){
            $appointment = new Appointment;
            $appointment->patient = $request->paciente;
            $appointment->date = $request->fecha;
            $appointment->hour = $request->hora;
            $appointment->hour_end = $nuevaHora;
            $appointment->description = $request->descripcion;
            $appointment->doctor_id = $doctor_id;
            $appointment->save(); 
            
            //Redireccionar
            return redirect()-> route('appointment.index')->with('success', 'Cita registrada correctamente');
        }else{
            return redirect()-> route('appointment.index')->with('alert', 'Esa hora ya esta asignada');
        }
       
        

       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        
    }
    public function editar(Request $request)
    {
        $minutoAnadir=30;
        $segundos_horaInicial=strtotime($request->hora);
        $segundos_minutoAnadir=$minutoAnadir*60;
        $nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);

        $checkHour = Appointment::where(array('date'=>$request->fecha,'hour'=>$request->hora))->get();

        if($checkHour->isEmpty()){
            $this->validate($request,[
                    'paciente' => 'required | string',
                    'fecha' => 'required | date',
                    'hora' => 'required | string',
                    'descripcion' => 'required | string',
                ]);
            $appointment = Appointment::where('id',$request->id)->update([
            'patient'=>$request->paciente,
            'date'=>$request->fecha,
            'hour'=>$request->hora,
            'hour_end'=>$nuevaHora,
            'description'=>$request->descripcion
            ]);
        return redirect()-> route('appointment.index')->with('success', 'Cita modificada correctamente');
        }else{
            return redirect()-> route('appointment.index')->with('alert', 'Esa hora ya esta asignada');
        }

        // $appointment->save(); 
        // $this->validate($request,[
        //     'paciente' => 'required | string',
        //     'fecha' => 'required | date',
        //     'hora' => 'required | string',
        //     'description' => 'required | string',
        // ]);
        // $minutoAnadir=30;
        // $segundos_horaInicial=strtotime($request->hora);
        // $segundos_minutoAnadir=$minutoAnadir*60;
        // $nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
        // $checkHour = Appointment::where(array('date'=>$request->fecha,'hour'=>$request->hora))->get();

        // if($checkHour->isEmpty()){
        //     $appointment = Appointment::where('id',$request->id)->update(['patient'=>$request->paciente]);
        //     $appointment->patient = $request->paciente;
        //     $appointment->date = $request->fecha;
        //     $appointment->hour = $request->hora;
        //     $appointment->hour_end = $nuevaHora;
        //     $appointment->description = $request->description;
        //     $appointment->save(); 
            
        //     //Redireccionar
        //     return redirect()-> route('appointment.index')->with('success', 'Cita modificada correctamente');
        // }else{
        //     return redirect()-> route('appointment.index')->with('alert', 'Esa hora ya esta asignada');
        // }
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
