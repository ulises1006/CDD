@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="margin-top:34px;" class="col-md-12">
            <div style="margin-right:34px;" class="right-align">
                <a class="waves-effect blue darken-3 btn-large right-align white-text" data-toggle="modal" data-target="#modal1">
                    <i class="material-icons right">add_circle</i>Crear receta</a>
                    
            </div>
            @if ($errors->any())
            <div style="margin-left: 20px;" id="mydiv" class="alert alert-danger" style="magin-top:140px;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div style="margin-left: 20px;" class="row col-12">
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
            

            <div style="width: 700px;height:400px;padding-right:0px !important;padding-bottom:0;" class="modal modal_box" id="modal1"
                tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                <div style="width: 700px;height:400px;padding-bottom:0;" class="modal-content">
                    <div class="modal-header" style="padding-top:0px;padding-bottom:5px;height:45px;">
                        <h3 class="center-align">Registrar receta</h3>
                        <button type="button" class="close align-right" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <div style="padding-bottom:0;padding-top:29px;" class="modal-body">
                            <form method="POST" action="{{ route('recipe.store') }}">
                            @csrf
                            <div style="margin-bottom:0;" class="row">

                                <div style="margin-bottom:0;" class="row col-12">
                                    <div class="input-field col s6">
                                        <label id="label-form" for="paciente">{{ __('Nombre del paciente') }}</label>
                                        <input id="paciente" type="text" name="paciente"> 
                                         
                                        @if ($errors->has('patient'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('patient') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="input-field col s6">
                                            <label id="label-form" for="paciente">{{ __('Edad') }}</label>
                                            <input id="edad" type="number" name="edad"> 
                                             
                                            @if ($errors->has('edad'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('edad') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                </div>

                                <div class="row col-12">
                                    <div class="input-field col s6">
                                        <label id="label-form" for="medicamento">{{ __('Medicamento y preescrpción médica') }}</label>
                                        <textarea id="textarea1" class="materialize-textarea" name="medicamento"></textarea>
                                        @if ($errors->has('medicamento'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('medicamento') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                </div>



                                <div style="margin-bottom:0; margin-top:15px;" class="row col-12 justify-content-center">
                                    <button style="color:black;margin-right:25px;text-align:left;width:100px;height:50px;" type="button" class="waves-effect grey lighten-4 btn"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="submit" style="width:60%; height:50px;" class="btn btn-primary blue darken-3">
                                        {{ __('Registrar receta') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <table style="margin-top:30px;margin-left:15px;" class="striped centered responsive-table">
               
                <thead style="font-size:17px;font-weight:600;">
                    <tr>
                        <th style="width:10%;">Código</th>
                        <th style="width:25%;">Nombre del paciente</th>
                        <th style="width:15%;">Fecha</th>
                        <th style="width:25%;">Medicamento</th>
                        <th style="width:25%;">Imprimir</th>
                        <th style="width:10%"> Eliminar</th>
                    </tr>
                </thead>
                <tbody class="centered">
                    @foreach($recipes as $payment)
                    
                    <tr class="center-align">
                        <th style="width:10%">{{ $payment->id }}</th>
                        <th style="width:25%">{{ $payment->name_patient}}</th>
                        <th style="width:15%">{{ $payment->fecha}}</th>
                        <th style="width:25%">{{ $payment->medicamento}}</th>
                        <th style="width:25%">
                            <a href="{{ Route('imprimir',$payment) }}" class="btn-floating btn-large waves-effect waves-light yellow darken-4 white-text">
                                <i class="material-icons right">print</i></a>
                        </th>
                        <th style="width:10%">
                                {!! Form::open(['route'=> ['recipe.destroy',$payment],'method'=>'DELETE']) !!}
                                <button class="btn-floating btn-large waves-effect waves-light red white-text" type="submit">
                                        <i class="material-icons right" style="text-align:center;">delete</i></button>
                                {!! Form::close() !!}
                            
                        </th>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            {{ $recipes->links()}}

            <div style="width:600px;height:297px;padding-right:0px !important;" class="modal modal_box" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        
                    <div class="modal-content">
                        <div class="modal-header" style="text-align:center;">
                            <h3 class="center-align" >Eliminar registro</h3>
                            <button type="button" class="close align-right" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            
                        </div>
    
                        <div class="modal-body">
                            <h4 class="center-align">Si aceptas los términos, el registro será eliminado definitivamente</h4>
                            <h4 class="center-align">¿Realmente deseas eliminarlo?</h4>
                        </div>
                        <div class="modal-footer">
                            <button style="color:black;margin-right:5px;" type="button" class="waves-effect grey lighten-4 btn" data-dismiss="modal">Cancelar</button>
                            {{-- {!! Form::open(['route'=> ['recipe.destroy',$payment],'method'=>'DELETE']) !!}
                            <button style="color:white;" type="submit" class="waves-effect red darken-3 btn">Eliminar registro</button>
                            {{ Form::submit('Eliminar', ['class' => 'waves-effect red darken-3 btn'])}}
                            {!! Form::close() !!} --}}
                            
                            
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('#mydiv').fadeOut('fast');
            }, 3000);
            // page is now ready, initialize the calendar...

        function mostrar_ocultar() {
            $('#paciente').hide();
        }
        

        });
       
    
    </script>
</div>

@endsection
@section('foot')
<script>
                        
        function mostrar_ocultar() {
            document.getElementById('texto').style.display='none';
            document.getElementById('paciente').style.display='none';
            $('#paciente').hide();
        }
    
    </script>
@endsection
