<?php

namespace App\Http\Controllers;

use App\History;
use App\Patient;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = History::where('id', $id)->get();
        return view('history.index', compact('history'));
    }

    public function historiaClinica(){
        $pdf = \PDF::loadView('historia_clinica');
        // return view('receta');
        return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'motivo' => 'required | string',
            'nombre_emergencia' => 'required | string',
            'telefono' => 'required | string',
            'medicamentos' => 'required | string',
            'alergias' => 'required | string',
            'prob_dental_previo' => 'required | string',
        ]);
        $history = new History;
        $history->id = $request->id;
        $history->motivo = $request->motivo;
        $history->patient_id = $request->patient_id;
        $history->nombre_emergencia = $request->nombre_emergencia;
        $history->telefono = $request->telefono;
        $history->parentesco = $request->parentesco;
        $history->ocupacion = $request->ocupacion;
        $history->anemia = $request->anemia;
        $history->asma = $request->asma;
        $history->cancer = $request->cancer;
        $history->colesterol = $request->colesterol;
        $history->convulsiones = $request->convulsiones;
        $history->diabetes = $request->diabetes;
        $history->enf_cardiacas = $request->enf_cardiacas;
        $history->epilepsia = $request->epilepsia;
        $history->homofilia = $request->homofilia;
        $history->hepatitis = $request->hepatitis;
        $history->hipertiroidismo = $request->hipertiroidismo;
        $history->hipotiroidismo = $request->hipotiroidismo;
        $history->infartos = $request->infartos;
        $history->marcapasos = $request->marcapasos;
        $history->migrañas = $request->migrañas;
        $history->presion_alta = $request->presion_alta;
        $history->presion_baja = $request->presion_baja;
        $history->prob_riñones = $request->prob_riñones;
        $history->quimioterapias = $request->quimioterapias;
        $history->sangrado = $request->sangrado;
        $history->taquicardias = $request->taquicardias;    
        $history->tuberculosis = $request->tuberculosis;
        $history->ulceras_gastricas = $request->ulceras_gastricas;
        $history->vih = $request->vih;
        $history->embarazo = $request->embarazo;
        $history->amamantando = $request->amamantando;
        $history->anticonceptivo = $request->anticonceptivo;
        $history->medicamentos = $request->medicamentos;
        $history->alergias = $request->alergias;
        $history->prob_dental_previo = $request->prob_dental_previo;
        $history->tabaquismo = $request->tabaquismo;
        $history->alcoholismo = $request->alcoholismo;
        $history->drogas = $request->drogas;
        $history->save();
        
        $history2 = History::where('id', $request->id)->first(); 
        $patients = Patient::where('id', $request->id)->first();

        //Redireccionar
        return redirect()-> route('history.show', $history2, $patients);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        return view('history.show',compact('history'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
    }
}
