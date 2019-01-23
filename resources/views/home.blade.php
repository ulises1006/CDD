@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card indigo darken-1">
                <div id="contenedor_fecha" class="card-content white-text">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row justify-content-center">
                        <div id="contenedor_dia" class="col-md-6">
                            <p class="dia-label">{{$dia}}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mes-label">{{$mes}}</p>
                            <p class="anio-label">{{$anio}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

