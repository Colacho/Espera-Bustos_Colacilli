@extends('frontend.layout.main')

@section('title', 'Horarios por Carreras')
@section('content')

<style>

/* body{
    height: 100vh;
} */
.container{
    min-height: 80vh;
}
    .texto-tabla {
        font-size: .8em;
    }
    
    .table {
    margin-top: 3rem;
}
@media(max-width:1050px){
.container div{
    flex-direction: column;
    margin: auto;
}
label{
    width: 100% !important;
    margin: 1rem 0;
}
input{
    width: 100% !important;
}

}

.text th, td{
        width:10rem;
    }
    label {
    width: 6rem;
}
</style>

<div class="container">   
        {{ Form::open(['route' => 'horario.createHorario']) }}
        <div class="row mt-4 mb-3 div-cnt">

            <div class="input-group col">
                <label class="input-group-text bg-dark text-light"for="#">Sede</label>
                {{Form::text("sede", $sede->descripcion , ["class" => "form-control", "readonly" ])}}
                {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}

            </div>

            <div class="input-group col">
                <label class="input-group-text bg-dark text-light" for="#">Carrera</label>
                {{Form::text("carrera", $carrera->descripcion , ["class" => "form-control", "readonly" ])}}
                {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}
            </div>
        </div>

        <div class="row mb-2 div-cnt">
            <div class="input-group col">
                <label class="input-group-text bg-dark text-light" for="#">Año</label>
                {{Form::text("anio_id", $anio->descripcion , ["class" => "form-control", "readonly" ])}}
                {{Form::text("anio_id", $anio->id , ["class" => "form-control", "hidden" ])}}

            </div>
            <div class="input-group col">
                <label class="input-group-text bg-dark text-light" for="#">Comisión</label>
                {{Form::text("comision_id", $comision->comision , ["class" => "form-control", "readonly" ])}}
                {{Form::text("comision_id", $comision->id , ["class" => "form-control", "hidden" ])}}

            </div>
        </div>
    
{!!Form::close()!!}

  <div class="tablaScroll">


<table class="table texto-tabla mb-0">
    <tr class="text-light text-center mb-0" style="background-color: #3A70FF;">
        <th class="text-left" scope="col">HORARIO</th>
        @foreach($dias as $dia)
        <th class="text-left" scope="col">{{$dia}}</th>
        @endforeach
    </tr>
   
     @foreach($modulosHorarios as $modulosHorario)
    <tr><td class="bg-dark text-light text-center align-middle" style="background: #F5F5F5;">{{$modulosHorario->horainicio}} a {{$modulosHorario->horafin}}
     @foreach($dias as $index=>$dia)
    <td style="background: #F5F5F5;" class="">
     @php ($a = 0)  
     @foreach($horarios as $horario)
 
     @if($horario->dia == $index && $horario->moduloHorario->id == $modulosHorario->id )
     @php ($a++)   
    <div class="text-center align-middle p-1">    
    <strong class="h6 mb-1">{{$horario->materia->descripcion}}</strong>  
    <p class="mb-3">{{$horario->profesor->apellido}}, {{$horario->profesor->nombre}} </p>
    <p class="mb-3">{{$horario->comentario}}</p>
    </div>
     @endif 
      @endforeach
      @if($a == 0)
     @php ($a++)  
        <div class="text-center  py-4 m-auto">  
        <p class="align-middle px-auto">{{ Form::open(['route' => 'horario.createHorario']) }}</p>
        </div>
    {{Form::text("sede_id", $sede->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("carrera_id", $carrera->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("anio_id", $anio->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("comision_id", $comision->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("modulohorario_id", $modulosHorario->id , ["class" => "form-control", "hidden" ])}}
    {{Form::text("dia", $index , ["class" => "form-control", "hidden" ])}}
{!!Form::close()!!}

        @endif 
     </td>
    @endforeach
    </tr>
@endforeach 
      
    <tr>

 
</table>
</div>
</div>

<p class='text-muted text-center mt-1 mb-1'>Estos horarios podr&iacute;an no ser los oficiales actuales del  Instituto. En caso de duda pregunte al preceptor correspondiente a la carrera.</p>
@endsection


