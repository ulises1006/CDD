<?php

namespace App\Http\Controllers;

use App\Treatment;
use App\Patient;
use Auth;
use Illuminate\Http\Request;

class TreatmentController extends Controller
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
    public function index($id)
    {
       
    }

    public function indexPatient($id)
    {
        $tratamientos = Treatment::where('patient_id',$id)->get();
        $patient = Patient::where('id',$id)->first();
        return view('treatment.index', compact('tratamientos','patient'));
    }

    public function pdfOdontograma(Request $request){
        $tratamiento = Treatment::where('id',$request->tratamiento_id)->first();
        $patient = Patient::where('id',$request->patient_id)->first();
        $fecha = date('d-m-Y');
        
        if($request->doctor_id == 1){
            $doctor = 'alberto';
        }
        else{
            $doctor = 'sergio';
        }
        $pdf = \PDF::loadView('odontograma_pdf',compact('tratamiento','doctor','patient','fecha'));
        // return view('odontograma');
        return $pdf->stream();
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
        $this->validate($request,[
            'name' => 'required | string',
            'description' => 'required | string',
            'price' => 'required | integer',
        ]);

        $treatment = new Treatment;
        $treatment->name = $request->name;
        $treatment->description = $request->description;
        $treatment->price = $request->price;
        $treatment->patient_id = $request->patient_id;
        $treatment->save();

        return redirect()-> route('treatment.indexPatient',$request->patient_id)->with('success', 'Tratamiento registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment)
    {
        $treatment->status = $request->status;
        $treatment->save();
        return redirect()-> route('treatment.indexPatient',$request->patient_id)->with('success', 'Tratamiento establecido como terminado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment)
    {
        $treatment->delete();
        return redirect()-> route('payment.index')->with('success', 'Registro eliminado exitosamente');
    }
    public function destroyTreatment(Treatment $treatment, $id)
    {
        $treatment->delete();
        return redirect()-> route('treatment.indexPatient',$id)->with('success', 'Registro eliminado exitosamente');
    }
}
