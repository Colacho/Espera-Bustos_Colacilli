@extends('backend.layouts.main')

@section('content')
<div class="row my-4">
    <div class="col-9 mx-auto p-3 d-flex justify-content-center"><h3>Cupos por Carrera</h3></div>
    <div class="col-6 mx-auto p-3 bg-white">
        {{ Form::model($cupos, ['method' => 'put', 'route' => ['cupo.update', $cupos->id]]) }}
        @csrf
            <div class="mb-3">
                {{ Form::label('carrera_id', 'Carrera', ['class' => 'col-sm-2 col-form-label']) }}
                {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "disabled" => "true"]) }}   
            </div>
            <div class="mb-3">
                {{ Form::label('cupos', 'Cupo', ['class' => 'col-sm-2 col-form-label']) }}
                {{ Form::number('cupos', old('cupos'), ['class' => 'form-control', 'placeholder' => 'Ingrese el cupos']) }}
                @error('cupos')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                {{ Form::label('reservados', 'reservados', ['class' => 'col-sm-2 col-form-label']) }}
                {{ Form::number('reservados', old('reservados'), ['class' => 'form-control', 'placeholder' => 'Ingrese el reservado']) }}
                @error('reservados')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                {{ Form::label('inscriptos', 'inscriptos', ['class' => 'col-sm-2 col-form-label']) }}
                {{ Form::number('inscriptos', old('inscriptos'), ['class' => 'form-control', 'placeholder' => 'Ingrese el inscripto']) }}
                @error('inscriptos')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                {!! Form::close() !!}
                <a href="{{ route('cupo.index') }}"><button type="button" class="btn btn-primary">Volver</button></a>
            </div>
    </div>
</div>
@endsection