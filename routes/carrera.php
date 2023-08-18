<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CarrerasedeController;
use App\Models\Carrera;
use App\Models\Materia;

/*
|--------------------------------------------------------------------------
| Carrera                                                  | Iván, Martín
|--------------------------------------------------------------------------
*/

Route::get('/carreras', function () {
    $carreras = Carrera::all();
    $materias = Materia::all()->sortBy('anio_id');
    return view('frontend.carreras.index', compact('carreras', 'materias'));
})->name('carreras');
Route::group(['middleware' => ['admin']], function () {
    Route::resource('carrera', CarreraController::class);
});
