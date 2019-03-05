<?php

namespace App\Http\Controllers;

use App\Recipe;
use Auth;
use App\Patient;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::where('doctor_id', Auth::user()->id)->with('Doctor')->paginate(10);
        return view('recipe.index', compact('recipes'));
    }

    public function crearPdf($id){
        
        $recipe = Recipe::where('id',$id)->first();
        if($recipe->doctor_id == 1){
            $doctor = 'alberto';
        }
        else{
            $doctor = 'sergio';
        }
        $pdf = \PDF::loadView('receta', compact('recipe','doctor'));
        // return view('receta');
        return $pdf->stream();
       
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
        $doctor_id = Auth::user()->id;
        $fecha = date('Y-m-d');
        $this->validate($request,[
            'paciente' => 'required | string',
            'medicamento' => 'required | string',
        ]);
        $recipe = new Recipe;
        $recipe->name_patient = $request->paciente;
        $recipe->edad = $request->edad;
        $recipe->fecha = $fecha;
        $recipe->medicamento = $request->medicamento;
        $recipe->doctor_id = $doctor_id;
        $recipe->save();
    
        return redirect()-> route('recipe.index')->with('success', 'Receta registrada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()-> route('recipe.index')->with('success', 'Registro eliminado exitosamente');
    }
}
