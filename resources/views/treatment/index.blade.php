@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="margin-top:34px;" class="col-md-12">
                <div style="margin-right:0; margin-left:34px;" class="row">
                        <div class="col-3">        
                           <a class="waves-effect blue darken-3 btn-large left-align white-text" onclick="window.history.back();">
                                <i class="material-icons left">arrow_back</i>Regresar
                            </a>
                        </div>
                        <div class="col-9 right-align">
                            <a class="waves-effect yellow darken-3 btn-large right-align white-text" href="http://localhost/odontograma/odontograma.php">
                                <i class="material-icons right">add_circle</i>Registrar odontograma
                            </a>  
                            <a class="waves-effect blue darken-3 btn-large right-align white-text" data-toggle="modal" data-target="#modal1">
                                <i class="material-icons right">add_circle</i>Registrar tratamiento
                            </a>
                        </div>   
                    </div>
            @if(count($tratamientos) >= 1)
            
            
            @else
            <div style="margin-top:30px;" class="row justify-content-center">
                <h3>No se tiene registrado ningún tratamiento</h3>
            </div>
            
            @endif

            @if ($errors->any())
            <div id="mydiv" class="alert alert-danger" style="margin-top:25px;margin-left: 20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div style="margin-left: 25px;" class="row col-12">
                @if(session('success'))
                <div id="mydiv" class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif @if(session('alert'))
                <div id="mydiv" class="alert alert-danger">
                    {{ session('alert') }}
                </div>
                @endif
            </div>
            <script>
                    setTimeout(function () {
                        $('#mydiv').fadeOut('fast');
                    }, 3000);
            </script>
            <div style="width: 700px;height:400px;padding-right:0px !important;padding-bottom:0;" class="modal modal_box" id="modal1"
                tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                <div style="width: 700px;height:400px;padding-bottom:0;" class="modal-content">
                    <div class="modal-header" style="padding-top:0px;padding-bottom:5px;height:45px;">
                        <h3 class="center-align">Registrar tratamiento</h3>
                        <button type="button" class="close align-right" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <div style="padding-bottom:0;padding-top:29px;" class="modal-body">
                            <form method="POST" action="{{ route('treatment.store') }}">
                            @csrf
                            <div style="margin-bottom:0;" class="row">

                                <div style="margin-bottom:0;" class="row col-12">
                                    <div class="input-field col s4">
                                        <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                        <label id="label-form" for="name">{{ __('Paciente') }}</label>
                                        <input id="patient" type="text" name="patient" value="{{ $patient->name }}" disabled>
                                        @if ($errors->has('patient'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('patient') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                        <div class="input-field col s4">
                                            <label id="label-form" for="name">{{ __('Nombre del tratamiento') }}</label>
                                            <input id="name" type="text" name="name"> 
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="input-field col s4">
                                            <label id="label-form" for="price">{{ __('Presupuesto') }}</label>
                                            <input id="price" type="number" name="price"> 
                                            @if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>
                                <div class="row col-12">
                                    <div class="input-field col s12">
                                            <label id="label-form" for="description">{{ __('Descripción del tratamiento') }}</label>
                                            <textarea id="description" type="text" class="materialize-textarea" name="description"></textarea>
                                        @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    
                                </div>



                                <div style="margin-bottom:0; margin-top:15px;" class="row col-12 justify-content-center">
                                    <button style="color:black;margin-right:25px;text-align:left;width:100px;height:50px;" type="button" class="waves-effect grey lighten-4 btn"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="submit" style="width:60%; height:50px;" class="btn btn-primary blue darken-3">
                                        {{ __('Registrar tratamiento') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
           
            <div class="row"> 
                @foreach ($tratamientos as $tratamiento)
                <div class="col-md-6">
                <div style="margin-left:45px;" class="card hoverable">
                        <div style="padding-bottom: 0;padding-top:0;" class="card-content black-text">
                            <div id="titulo_card" class="card-header">Información de tratamiento</div>
                            <div class="row">
                                
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 id="info_h5">Nombre del tratamiento: </h5>
                                        </div>
                                        <div id="info_p" class="col-6">{{ $tratamiento->name }}</div>
                                        
                                    </div>
                                    <div class="row">
                                            <div class="col-6">
                                                <h5 id="info_h5">Descripción del tratamiento: </h5>
                                            </div>
                                            <div id="info_p" class="col-6">{{ $tratamiento->description }}</div>
                                        </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 id="info_h5">Estado del tratamiento: </h5>
                                        </div>
                                        <div id="info_p" class="col-6">{{ $tratamiento->status }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 id="info_h5">Precio: </h5>
                                        </div>
                                        <div id="info_p" class="col-6">{{ $tratamiento->price }}</div>
                                    </div>
                                    
                                                                       
                                </div>
                            </div>
        
                        </div>
                        <div class="card-action" style="text-align:center; margin-bottom:18px;margin-top:-10px;">
                                <form method="POST" name="edit_form" action="{{ route('treatment.update',$tratamiento->id) }}">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <input type="hidden" name="status" value="Terminado">
                                        <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                        

                                        <button  type="submit" class="waves-effect blue darken-3 btn white-text">
                                            {{ __('Terminado') }}
                                        </button> 
                                        <a class="waves-effect orange darken-3 btn white-text" href="{{ Route('payment.indexPatient',$patient->id) }}">Pagos</a>
                            
                                        <a style="color:white;" class="waves-effect red darken-3 btn modal-trigger" data-toggle="modal" data-target="#modal2">Eliminar</a>
                                    </form>
                           

                            

                            <div style="width:600px;height:297px;padding-right:0px !important;" class="modal modal_box" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        
                                    <div class="modal-content">
                                        <div class="modal-header" style="text-align:center;">
                                            <h3 class="center-align" >Eliminar registro</h3>
                                            <button type="button" class="close align-right" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            
                                        </div>
        
                                        <div class="modal-body">
                                            <h4 class="center-align">Si aceptas los terminos el registro del paciente sera eliminado definitivamente</h4>
                                            <h4 class="center-align">¿Realmente deseas eliminarlo?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button style="color:black;margin-right:5px;" type="button" class="waves-effect grey lighten-4 btn" data-dismiss="modal">Cancelar</button>
                                            <a style="color:white;" onclick="enviar_formulario()" class="waves-effect red darken-3 btn">Eliminar</a>
                                        </div>
                                    </div>
                            </div>

                            
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
                
        </div>
    </div>
    
</div>
<form method="POST" action="{{ route('treatment.destroyTreatment', array($tratamiento,$patient->id)) }}" name="delete_form">
        {{ csrf_field() }} {{ method_field('DELETE')}}
    </form>

@endsection
@section('foot')
<script>
        function enviar_formulario() {
            document.delete_form.submit();
        }
        function enviar_formulario2() {
            document.edit_form.submit();
        }
    
    </script>
@endsection
