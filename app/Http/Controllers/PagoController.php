<?php

namespace App\Http\Controllers;

use App\Pago;
use App\Patient;
use Auth;
use Illuminate\Http\Request;

class PagoController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    } 


    public function index()
    {
        $rol = Auth::user()->role;
        $patients=Patient::all();
        if($rol == "secretaria"){
            $payments=Pago::with('Patient','Doctor')->paginate(10);
            
            return view('payment.index', compact('payments', 'patients','rol'));
        }
        else{
            $payments = Pago::where('doctor_id',Auth::user()->id)->with('Patient')->paginate(10);
            dd($payments);
            return view('payment.index', compact('payments', 'patients','rol'));
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
        $paciente;
        if(Auth::user()->role == "secretaria"){
            $doctor_id = $request->doctor;
        }else{
            $doctor_id = Auth::user()->id;
        }


        $this->validate($request,[
                'monto' => 'required | integer',
                'fecha' => 'required | date',
                'tratamiento' => 'required | string',
            ]);

        if($request->pacienteSR == null){
            $paciente = $request->paciente;
            
            $payment = new Pago;
            $payment->monto = $request->monto;
            $payment->fecha = $request->fecha;
            $payment->tratamiento = $request->tratamiento;
            $payment->patient_id =$paciente;
            $payment->doctor_id = $doctor_id;
            $payment->save();
    
            return redirect()-> route('payment.index')->with('success', 'Pago registrado con éxito');
        }else{
            $paciente = $request->pacienteSR;
            $payment = new Pago;
            $payment->monto = $request->monto;
            $payment->fecha = $request->fecha;
            $payment->tratamiento = $request->tratamiento;
            $payment->paciente_no_registrado =$paciente;
            $payment->doctor_id = $doctor_id;
            $payment->save();
    
            return redirect()-> route('payment.index')->with('success', 'Pago registrado con éxito');
        }

       
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
    public function destroy(Pago $payment)
    {
        $payment->delete();
        return redirect()-> route('payment.index')->with('success', 'Registro eliminado exitosamente');
    }
}
