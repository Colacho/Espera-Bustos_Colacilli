@extends('backend.layouts.main')
@section('title', 'Carreras')
@section('content')
  <h1>Editar Carrera</h1>
  <div>
    @if(Session::has('status'))
    <div class="alert alert-success">{{ Session('status')}}</div>
    @endif
  </div>
  <div class="links">
{{ Form::model($carrera, [ 'method' => 'put' , 'route' => ['carreras.update', $carrera->id],  'files' => true]) }}
  @csrf <!-- {{ csrf_field() }} -->
    <div class="form-group @if($errors->has('titulo')) has-error has-feedback @endif">
          {{ Form::label("carrera", 'Carrera', ['class' => 'control-label']) }}
          {{Form::text("carrera", old("carrera"), ["class" => "form-control", "placeholder" => "Ingrese la Carrera", ])}}                        
          @error('carrera') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
          {{ Form::label("resolucion", 'Resolución', ['class' => 'control-label']) }}
          {{Form::text("resolucion", old("cresolucion"), ["class" => "form-control", "placeholder" => "Ingrese la Resolucion", ])}}                        
          @error('resolucion')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>    
    <div class="form-group">
          {{ Form::label("res_archivo", 'Resolución PDF', ['class' => 'control-label']) }}
           {{ Form::file("res_archivo") }}                  
          @error('res_archivo')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </div>     
 </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button>    
    </div>
{!!Form::close()!!}
@endsection