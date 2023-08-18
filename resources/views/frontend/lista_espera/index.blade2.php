@extends('layouts.app')

@section('content')
<div class="row my-4">

    {{ Form::open(['route' => 'espera.filtrar']) }}
    @csrf
    <div class="card-body">
    <div class="input-group mb-3">
                <div class="input-group-text">
                    {{ Form::label("carrera_id",'Carrera', ['class' => 'control-label']) }}
                </div>
                {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione la sede" ]) }}
            </div>
            @error('carrera_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>   
    {!!Form::close()!!}

    <div class="col-6 mx-auto p-3 bg-white">
        @forelse($espera as $user)
            @if ($loop->first)
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">N°</th>
                    <th scope="col">carreda_id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Telefono Alternativo</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
            @endif
                    <tr>
                        
                        <td>{{ $user-> id}}</td>
                        <td>{{ $user->carrera->descripcion }}</td>
                        <td>{{ $user-> nombre}}</td>
                        <td>{{ $user-> apellido}}</td>
                        <td>{{ $user-> dni}}</td>
                        <td>{{ $user-> telefono}}</td>
                        <td>{{ $user-> tel_alternativo}}</td>
                        <td>{{ $user-> email}}</td>
                    </tr>
            @if($loop->last)
        </tbody>
    </table>
    @endif
    @empty
        <p class="text-capitalize">No hay registros</p>
    @endforelse
    </div>
</div>
@endsection