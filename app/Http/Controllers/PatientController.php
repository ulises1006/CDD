<?php

namespace App\Http\Controllers;

use App\Patient;
use App\History;
use Illuminate\Http\Request;
use Session;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    } 


    public function index()
    {
        $patients = Patient::paginate(10);
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name' => 'required | string',
            'address' => 'required | string',
            'age' => 'required | integer',
            'birthday' => 'required | string',
            'phone' => 'required | string',
            'sex' => 'required | string',
        ]);
        //Instanciar modelo: Almacenamiento
        $patient = new Patient;
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
    public function show(Patient $patient)
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
    public function edit(Patient $patient)
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
    public function update(Request $request, Patient $patient)
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
    public function destroy(Patient $patient)
    {
        $patient->delete();
        Session::put('success', 'Your Record Deleted Successfully.');
        return redirect()-> route('patient.index');
    }
}
