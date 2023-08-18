@extends('backend.layouts.main')
@section('title', 'Carreras')
@section('content')

{{ Form::open(['route' => 'horario.store']) }}
<div class="input-group mb-3">
    <label class="input-group-text" for="#">Sede</label>
    {{Form::text("sede", $sede->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}

</div>

<div class="input-group mb-3">
    <label class="input-group-text" for="#">Carrera</label>
    {{Form::text("carrera", $carrera->descripcion , ["class" => "form-control", "readonly" ])}}
    {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}

</div>


</br><button type="submit" style="width: 100%;" class="btn btn-primary">Consultar</button></div>
{!!Form::close()!!}

@foreach($horarios as $horario)
@if($loop->first)
<table class="table table-dark">
    <tr>
        <td>Dia</td>
        <td>Modulo</td>
        <td>Materia</td>
        <td>Profesor</td>
        <td>Comentario</td>
        <td>Comision</td>
        <td>
            <a href="{{ route('horario.create') }}" class="btn btn-success">
                <img src="{{ asset('svg/new.svg') }}" height="20" width="20" alt="Crear" title="Crear">
            </a>
        </td>
    </tr>
    @endif
    <tr>
        <td>{{$horario->dia }}</td>
        <td>{{$horario->moduloHorario->horainicio}} - {{$horario->moduloHorario->horafin}}</td>
        <td>{{$horario->materia->descripcion}}</td>
        <td>{{$horario->profesor->apellido}}, {{$horario->profesor->nombre}}</td>
        <td>{{$horario->comentario}}</td>
        <td>{{$horario->comision->comision}}</td>
        <td>
            {{ Form::model($horario, [ 'method' => 'delete', 'route' => ['horario.destroy', $horario -> id] ]) }}
            @csrf
            <a href="{{ route('horario.edit', ['horario' =>  1] ) }}" class="btn btn-primary">
                <img src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar">
            </a>
            <button type="submit" class="btn btn-danger" onclick="if (!confirm('¿Esta seguro de borrar el horario?')) return false;">
                <img src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar" title="Borrar">
            </button>
            {!!Form::close()!!}
        </td>
    </tr>
    @if($loop->last)
</table>
@endif

@endforeach

@endsection