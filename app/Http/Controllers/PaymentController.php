<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Patient;
use Illuminate\Http\Request;

class PaymentController extends Controller
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
        $patients=Patient::all();
        $payments=Payment::with('Patient')->paginate(10);
        return view('payment.index', compact('payments', 'patients'));
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
            'monto' => 'required | integer',
            'fecha' => 'required | date',
            'tratamiento' => 'required | string',
            'paciente' => 'required | integer',
        ]);
        $payment = new Payment;
        $payment->monto = $request->monto;
        $payment->fecha = $request->fecha;
        $payment->tratamiento = $request->tratamiento;
        $payment->patient_id =$request->paciente;
        $payment->doctor_id = $doctor_id;
        $payment->save();

        return redirect()-> route('payment.index')->with('success', 'Pago registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()-> route('payment.index')->with('success', 'Registro eliminado exitosamente');
    }
}
