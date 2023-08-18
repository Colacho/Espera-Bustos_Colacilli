@extends('backend.layouts.main')
@section('title', 'Horarios')
@section('content')
{{Form::select("descripcion", $carreras, null, ["class" => "form-control", "placeholder" => "Seleccione una carrera" ]) }}                 
@endsection