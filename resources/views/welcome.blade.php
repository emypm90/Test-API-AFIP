@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Consulta CUIT') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('consulta')}}" enctype="multipart/form-data" method="POST" style="display: flex; flex-direction: column; align-items: center;">
                        @csrf
                            
                            <label class="mb-1 ms-2">Ingrese CUIT a consultar</label>
                            <input class="mt-1 mb-2" type="number" name="date" placeholder="20111111112">
                            
                            @if($_POST)
                                <label>CUIT: {{$constancias->idPersona}}</label>
                                <label>Nombre: {{$constancias->apellido}}</label>
                                <label>Apellido: {{$constancias->nombre}}</label>
                            @endif
                        
                        <div style="margin-left: -17px">
                            <button class="btn btn-secondary mt-2">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
