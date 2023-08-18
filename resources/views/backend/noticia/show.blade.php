@extends('backend.layouts.main')
@section('title', __('noticias.mostrar'))
@section('content')
<div class="Inicio">
  <h1 class="TextoInicio">{{__('noticias.mostrar')}}</h1>
</div>

<div>
  @if(Session::has('status'))
  <div class="alert alert-success">{{ Session('status')}}</div>
  @endif
</div>
<div class="links">
  {{ Form::model($noticia, [ 'method' => 'get' , 'route' => ['noticias.show', $noticia->id]]) }}
  <div class="form-group @if($errors->has('titulo')) has-error has-feedback @endif">
    {{ Form::label(__('noticias.titulo'), null, ['class' => 'control-label', 'for' => 'titulo']) }}
    {{Form::text("titulo", null , ["class" => "form-control", "readonly" ])}}
  </div>
  <div class="form-group">
    {{ Form::label(__('noticias.cuerpo'), null, ['class' => 'control-label', 'for' => 'cuerpo']) }}
    {{Form::textarea("cuerpo", old("cuerpo"), ["class" => "form-control", "readonly"])}}
  </div>
  <div class="form-group @if($errors->has('imagen')) has-error has-feedback @endif">
    {{ Form::label(__('noticias.imagen'), null, ['class' => 'control-label', 'for' => 'imagen']) }}
    @if($noticia->imagen)
    @if(Str::startsWith($noticia->imagen, 'http'))
    <img src="{{ $noticia->imagen }}" class="img-responsive" alt="...">
    @else
    <img src="{{ asset('./storage/'. $noticia->imagen) }}" class="img-responsive" alt="...">
    @endif
    @else
    <h5 class="text-center text-muted"> No hay imagen disponible </h5>
    <hr>
    @endif
  </div>
  <div class="form-group">
    {{ Form::label(__('noticias.autor'), null, ['class' => 'control-label', 'for' => 'autor']) }}
    {{Form::select("autor", $users, null, ["class" => "form-control", "disabled", "readonly"])
          }}
  </div>
  <div class="form-group">
    {{ Form::label("carrera_id", __('noticias.carrera'), ['class' => 'control-label']) }}
    {{Form::select("carrera_id", $carreras, null, ["class" => "form-control", "disabled", "readonly"]) }}
  </div>
  <div class="form-group @if($errors->has('archivo1')) has-error has-feedback @endif">
    {{ Form::label("archivo1", "Archivos", ['class' => 'control-label']) }}
    @if($noticia->archivo1)<span class="badge badge-warning"><a href="{{ asset('./storage/'. $noticia->archivo1) }}">{{ basename($noticia->archivo1) }}</a> </span> @endif
    @if($noticia->archivo2) <span class="badge badge-warning"><a href="{{ asset('./storage/'. $noticia->archivo2) }}">{{ basename($noticia->archivo2) }}</a> </span>@endif
    @if($noticia->archivo3) <span class="badge badge-warning"><a href="{{ asset('./storage/'. $noticia->archivo3) }}">{{ basename($noticia->archivo3) }}</a> </span>@endif
    @error('archivo')<div class="alert alert-danger">{{ $message }}</div>@enderror
  </div>
  <div class="form-group">
    {{ Form::label("etiqueta_id", __('noticias.etiquetas'), ['class' => 'control-label']) }}
    @foreach($etiquetas as $id => $nombre)
    @if( $noticia->etiquetas()->find($id))
    <div class="form-check form-check-inline">
      <span class="badge bg-info">
        {{ Form::checkbox('etiqueta'.$id, $id, 'X', ['class' => 'check-input', "disabled"]) }}{{ Form::label($id, $nombre, ['class' => 'check-label']) }}
      </span>
    </div>
    @endif
    @endforeach
  </div>
</div>
{!!Form::close()!!}
@endsection