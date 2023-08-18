@extends('frontend.layout.main')

@section('content')
<div class="row my-4">
    <a href="{{ route('cupo.index') }}"><div class="d-flex justify-content-end"><button type="button" class="btn btn-primary me-5">Volver</button></div></a>
    <div class="col-9 mx-auto p-3 d-flex justify-content-center"><h3>Número de Cupos de Carreras</h3></div>
    <div class="col-6 mx-auto p-3 bg-white">
        {{ Form::open(['route' => 'cupo.store']) }}
        @csrf
            <div class="mb-3">
                {{ Form::label('descripcion', 'Carrera', ['class' => 'col-sm-2 col-form-label']) }}
                {{ Form::select('carrera_id', $carreras, null, ['class' => 'form-control', 'placeholder' => 'Seleccione carrera...']) }}
            </div>
            <div class="mb-3">
                {{ Form::label('cupos', 'Cupos', ['class' => 'col-sm-2 col-form-label']) }}
                {{ Form::number('cupos', old('cupos'), ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Cupos']) }}
                @error('cupos')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                {{ Form::label('reservados', 'Reservados', ['class' => 'col-sm-2 col-form-label']) }}
                {{ Form::number('reservados', old('reservados'), ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Reservados']) }}
                @error('reservados')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                {{ Form::label('inscriptos', 'Inscriptos', ['class' => 'col-sm-2 col-form-label']) }}
                {{ Form::number('inscriptos', old('inscriptos'), ['class' => 'form-control', 'placeholder' => 'Ingrese el número de Inscriptos']) }}
                @error('inscriptos')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        {!! Form::close() !!}
    </div>
</div>
@endsection