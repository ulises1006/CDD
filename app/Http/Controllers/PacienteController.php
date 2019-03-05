<?php

namespace App\Http\Controllers;

use App\History;
use Auth;
use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 


    public function index()
    {
        $patients = Paciente::where('doctor_id',Auth::user()->id)->paginate(10);
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = Auth::user()->role;
        return view('patient.create',compact('rol'));
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
            'name' => 'required | string',
            'address' => 'required | string',
            'age' => 'required | integer',
            'birthday' => 'required | string',
            'phone' => 'required | string',
            'sex' => 'required | string',
        ]);
        //Instanciar modelo: Almacenamiento
        $patient = new Paciente;
        $patient->name = $request->name;
        $patient->address = $request->address;
        $patient->code = $request->code;
        $patient->state = $request->state;
        $patient->age = $request->age;
        $patient->birthday = $request->birthday;
        $patient->parent = $request->parent;
        $patient->phone = $request->phone;
        $patient->sex = $request->sex;
        $patient->occupation = $request->occupation;
        $patient->doctor_id = $doctor_id;
        $patient->save();

        //Redireccionar
        return redirect()-> route('patient.show', $patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $patient)
    {
        $history = History::where('id',$patient->id)->first();
        if(empty($history)){
            $history = "no";
            return view('patient.show', compact('patient','history'));
        }else{
            return view('patient.show', compact('patient','history'));
        }    
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $patient)
    {
        return view('patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $patient)
    {
        $patient->name = $request->name;
        $patient->address = $request->address;
        $patient->code = $request->code;
        $patient->state = $request->state;
        $patient->age = $request->age;
        $patient->birthday = $request->birthday;
        $patient->parent = $request->parent;
        $patient->phone = $request->phone;
        $patient->occupation = $request->occupation;
        $patient->save();

        //Redireccionar
        return redirect()-> route('patient.show', $patient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $patient)
    {
        $patient->delete();
        Session::put('success', 'Your Record Deleted Successfully.');
        return redirect()-> route('patient.index');
    }
}
