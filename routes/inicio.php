<?php

use App\Models\Etiqueta;
use App\Models\Carrera;
use App\Models\Historia;
use App\Models\Objetivo;

/*
|--------------------------------------------------------------------------
| Inicio                                                    | Iván, Martín
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
  $novedades = array();
  $e = Etiqueta::where('nombre', 'novedades')->first();
  $cartelera = array();
  $c = Etiqueta::where('nombre', 'cartelera')->first();
  $carreras = Carrera::all();
  $historias = Historia::all();
  $objetivos = Objetivo::all();
  if (!empty($e)) {
    $novedades = $e->novedades()->get();
  }
  if (!empty($c)) {
    $cartelera = $c->cartelera()->get();
  }
  return view('frontend.carrousel.carrousel', compact('novedades', 'carreras', 'historias', 'objetivos', 'cartelera'));
})->name('inicio');
