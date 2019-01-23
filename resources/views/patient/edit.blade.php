@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
                <div style="text-align:center;" class="justify-content-center">
                    <h1>Editar información del paciente</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('patient.update',$patient->id) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="input-field col s4">
                                <label id="label-form" for="name">{{ __('Nombre del paciente') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $patient->name }}" autofocus> 
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <label id="label-form" for="age">{{ __('Edad') }}</label>
                                <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ $patient->age }}"> 
                                @if ($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <select disabled id="sex" name="sex">
                                    <option value="" disabled selected>Sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                                @if ($errors->has('sex'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <label id="label-form" for="parent">{{ __('Padre o tutor') }}</label>
                                <input id="parent" type="text" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="parent" value="{{ $patient->parent }}"> 
                                @if ($errors->has('parent'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('parent') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                <label id="label-form" for="phone">{{ __('Numero de teléfono') }}</label>
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $patient->phone }}" > 
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s4">
                                <label id="label-form" for="address">{{ __('Dirección') }}</label>
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $patient->address }}"> 
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                 @endif
                            </div>
                            <div class="input-field col s4">
                                <label id="label-form" for="state">{{ __('Entidad federativa') }}</label>
                                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $patient->state }}"> 
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif        
                            </div>
                            <div class="input-field col s4">
                                <label id="label-form" for="code">{{ __('Código postal') }}</label>
                                <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ $patient->code }}" > 
                                @if ($errors->has('code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif        
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col s6">
                                <label id="label-form" for="birthday">{{ __('Fecha de nacimiento') }}</label>
                                <input id="birthday" type="text" value="{{ $patient->birthday }}" name="birthday" class="datepicker"> 
                                @if ($errors->has('birthday'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                                <div class="input-field col s6">
                                    <label id="label-form" for="occupation">{{ __('Ocupación') }}</label>
                                    <input id="occupation" type="text" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="{{ $patient->occupation }}"> 
                                    @if ($errors->has('occupation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('occupation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" style="width:100%; height:50px;" class="btn btn-primary blue darken-3">
                                    {{ __('Actualizar información') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection
