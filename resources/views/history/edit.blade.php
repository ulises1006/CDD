@extends('layouts.app') @section('content')
<div style="margin-left:35px;" class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div style="text-align:center;margin-top:30px;" class="justify-content-center">
                <h1>Registrar historia clínica</h1>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('history.update',$history->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="input-field col s12">
                            <label id="label-form" for="name">{{ __('Motivo de la consulta') }}</label>
                            <input id="motivo" type="text" name="motivo" value="{{ $history->motivo }}" autofocus> @if ($errors->has('motivo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('motivo') }}</strong>
                            </span>
                            @endif
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <h4>En caso de emergencia comunicarse con: </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <label id="label-form" for="nombre_emergencia">{{ __('Nombre') }}</label>
                            <input id="nombre_emergencia" type="text" name="nombre_emergencia" value="{{ $history->nombre_emergencia }}" autofocus> 
                            @if ($errors->has('nombre_emergencia'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nombre_emergencia') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="input-field col s6">
                            <label id="label-form" for="telefono">{{ __('Numero de teléfono') }}</label>
                            <input id="telefono" type="text" name="telefono" value="{{ $history->telefono }}" autofocus> @if ($errors->has('telefono'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <label id="label-form" for="parentesco">{{ __('parentesco') }}</label>
                            <input id="parentesco" type="text" name="parentesco" value="{{ $history->parentesco }}" autofocus> @if ($errors->has('parentesco'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('parentesco') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="input-field col s6">
                            <label id="label-form" for="ocupacion">{{ __('Ocupación') }}</label>
                            <input id="ocupacion" type="text" name="ocupacion" value="{{ $history->ocupacion }}" autofocus> @if ($errors->has('ocupacion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('ocupacion') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div style="margin-bottom:0" class="row">
                        <div class="input-field col s12">
                            <h3 style="font-weight:900;margin-bottom:0;">Antecedentes personales patológicos: </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h4>Sufre o ha sufrido de alguna de estas enfermedades </h4>
                        </div>
                    </div>
                    <div style="margin-top:0;" class="row">
                        <div style="margin-right: 25px;margin-top:0;" class="input-field col s6">
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Anemia</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->anemia == 'no')
                                    <p>
                                        <label>
                                            <input name="anemia" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="anemia" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                            <label>
                                                <input name="anemia" value="no" type="radio" />
                                                <span>No</span>
                                            </label>
                                            <label>
                                                <input name="anemia" value="si" type="radio" checked />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6 ">
                                    <h4>Asma</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->asma == 'no')
                                    <p>
                                        <label>
                                            <input name="asma" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="asma" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="asma" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="asma" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Cáncer</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->cancer == 'no')
                                    <p>
                                        <label>
                                            <input name="cancer" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="cancer" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="cancer" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="cancer" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Colesterol</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->colesterol == 'no')
                                    <p>
                                        <label>
                                            <input name="colesterol" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="colesterol" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="colesterol" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="colesterol" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Convulsiones</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->convulsiones == 'no')
                                    <p>
                                        <label>
                                            <input name="convulsiones" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="convulsiones" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="convulsiones" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="convulsiones" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Diabetes</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->diabetes == 'no')
                                    <p>
                                        <label>
                                            <input name="diabetes" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="diabetes" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="diabetes" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="diabetes" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Enfermedades cardiacas</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->enf_cardiacas == 'no')
                                    <p>
                                        <label>
                                            <input name="enf_cardiacas" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="enf_cardiacas" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="enf_cardiacas" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="enf_cardiacas" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Epilepsia o desmayos</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->epilepsia == 'no')
                                    <p>
                                        <label>
                                            <input name="epilepsia" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="epilepsia" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="epilepsia" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="epilepsia" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Hemofilia</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->homofilia == 'no')
                                    <p>
                                        <label>
                                            <input name="homofilia" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="homofilia" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="homofilia" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="homofilia" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Hepátitis</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->hepatitis == 'no')
                                    <p>
                                        <label>
                                            <input name="hepatitis" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="hepatitis" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="hepatitis" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="hepatitis" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Hipertiroidismo</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->hipertiroidismo == 'no')
                                    <p>
                                        <label>
                                            <input name="hipertiroidismo" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="hipertiroidismo" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="hipertiroidismo" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="hipertiroidismo" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Hipotiroidismo</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->hipotiroidismo == 'no')
                                    <p>
                                        <label>
                                            <input name="hipotiroidismo" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="hipotiroidismo" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="hipotiroidismo" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="hipotiroidismo" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                        </div>


                        <div style="margin-top:0;" class="input-field col s6">
                            <div style="margin-bottom:0;margin-top:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Infartos previos</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->infartos == 'no')
                                    <p>
                                        <label>
                                            <input name="infartos" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="infartos" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="infartos" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="infartos" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Marcapasos</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->marcapasos == 'no')
                                    <p>
                                        <label>
                                            <input name="marcapasos" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="marcapasos" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="marcapasos" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="marcapasos" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Migrañas</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->migrañas == 'no')
                                    <p>
                                        <label>
                                            <input name="migrañas" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="migrañas" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="migrañas" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="migrañas" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Presión arterial alta</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->presion_alta == 'no')
                                    <p>
                                        <label>
                                            <input name="presion_alta" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="presion_alta" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="presion_alta" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="presion_alta" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Presión arterial baja</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->presion_baja == 'no')
                                    <p>
                                        <label>
                                            <input name="presion_baja" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="presion_baja" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="presion_baja" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="presion_baja" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Problemas del riñón</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->prob_riñones == 'no')
                                    <p>
                                        <label>
                                            <input name="prob_riñones" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="prob_riñones" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="prob_riñones" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="prob_riñones" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Químioterapias</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->quimioterapias == 'no')
                                    <p>
                                        <label>
                                            <input name="quimioterapias" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="quimioterapias" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="quimioterapias" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="quimioterapias" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Sangrados excesivos</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->sangrado == 'no')
                                    <p>
                                        <label>
                                            <input name="sangrado" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="sangrado" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="sangrado" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="sangrado" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>

                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Taquicardías</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->taquicardias == 'no')
                                    <p>
                                        <label>
                                            <input name="taquicardias" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="taquicardias" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="taquicardias" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="taquicardias" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Tuberculosis</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->tuberculosis == 'no')
                                    <p>
                                        <label>
                                            <input name="tuberculosis" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="tuberculosis" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="tuberculosis" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="tuberculosis" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Úlceras gástricas</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->ulceras_gastricas == 'no')
                                    <p>
                                        <label>
                                            <input name="ulceras_gastricas" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="ulceras_gastricas" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="ulceras_gastricas" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="ulceras_gastricas" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>VIH/Sida</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->vih == 'no')
                                    <p>
                                        <label>
                                            <input name="vih" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="vih" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="vih" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="vih" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h3>Información médica</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <h4>General</h4>
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Medicamentos que esta tomando</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    <input id="medicamentos" type="text" name="medicamentos" value="{{ $history->medicamentos }}" autofocus>

                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Alergias</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    <input id="alergias" type="text" name="alergias" value="{{ $history->alergias }}" autofocus>
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Problema dental previo</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    <input id="prob_dental_previo" type="text" name="prob_dental_previo" value="{{ $history->prob_dental_previo }}" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <h4>* Mujeres</h4>
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Embarazo</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->embarazo == 'no')
                                    <p>
                                        <label>
                                            <input name="embarazo" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="embarazo" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="embarazo" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="embarazo" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Esta usted amamantando</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->amamantando == 'no')
                                    <p>
                                        <label>
                                            <input name="amamantando" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="amamantando" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="amamantando" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="amamantando" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Esta tomadno algún anticonceptivo</h4>
                                </div>
                                <div class="input-field col s6 right-align">
                                    @if($history->anticonceptivo == 'no')
                                    <p>
                                        <label>
                                            <input name="anticonceptivo" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="anticonceptivo" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="anticonceptivo" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="anticonceptivo" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h3 style="font-weight:900; margin-top:25px;margin-bottom:0;">Antecedentes personales no patólogicos</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-fiel col s4">
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Tabaquismo</h4>
                                </div>
                                <div style="margin-right:20px;" class="input-field col s6 right-align">
                                    @if($history->tabaquismo == 'no')
                                    <p>
                                        <label>
                                            <input name="tabaquismo" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="tabaquismo" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="tabaquismo" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="tabaquismo" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                        </div>
                        <div class="input-fiel col s4">
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Alcoholismo</h4>
                                </div>
                                <div style="margin-right:20px;" class="input-field col s6 right-align">
                                    @if($history->alcoholismo == 'no')
                                    <p>
                                        <label>
                                            <input name="alcoholismo" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="alcoholismo" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="alcoholismo" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="alcoholismo" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                        </div>
                        <div class="input-fiel col s4">
                            <div style="margin-bottom:0;" class="row">
                                <div class="input-field col s6">
                                    <h4>Drogas</h4>
                                </div>
                                <div style="margin-right:20px;" class="input-field col s6 right-align">
                                    @if($history->drogas == 'no')
                                    <p>
                                        <label>
                                            <input name="drogas" value="no" type="radio" checked />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="drogas" value="si" type="radio" />
                                            <span>Si</span>
                                        </label>
                                    </p>
                                    @else
                                    <p>
                                        <label>
                                            <input name="drogas" value="no" type="radio" />
                                            <span>No</span>
                                        </label>
                                        <label>
                                            <input name="drogas" value="si" type="radio" checked />
                                            <span>Si</span>
                                        </label>
                                        </p>
                                    @endif    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" style="width:100%; height:50px;margin-bottom:30px;" class="btn btn-primary blue darken-3">
                                {{ __('Registrar historia clínica') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
