<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListaEsperaController;
use App\Http\Controllers\CupoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//-----   IMPORTANTE!!  -----   IMPORTANTE!!  -----   IMPORTANTE!!   -----//
//  NO modificar web.php, hacer los cambios en los archivos de cada equipo
//  que están en la carpeta routes.
//  Cada archivo tiene el nombre de los responsables.
//                       Gracias! 
//                                              Gisela
//------------------------------------------------------------------------//

//Noticias-> Gisela
Route::group([], __DIR__ . '/blog.php');

//Inicio-> Iván, Martín
Route::group([], __DIR__ . '/inicio.php');

//Carrera-> Iván, Martín
Route::group([], __DIR__ . '/carrera.php');

//Materia-> Iván, Martín
Route::group([], __DIR__ . '/materia.php');

//Programa-> Alejandro, Brian
Route::group([], __DIR__ . '/programa.php');

//Horario y Módulo horario-> Aylén, Sofía, Ulises
Route::group([], __DIR__ . '/horario.php');

//Comision y Año-> Aylén, Sofía, Ulises
Route::group([], __DIR__ . '/comision.php');

//Profesor-> Aylén, Sofía, Ulises
Route::group([], __DIR__ . '/profesor.php');

//Historia y Objetivo-> Alejo, Esteban
Route::group([], __DIR__ . '/historia.php');

//Contacto y Sede-> Alejo, Esteban
Route::group([], __DIR__ . '/contacto.php');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['admin']], function () {
    Route::resource('espera', ListaEsperaController::class); /* Bustos - Colacilli */
    Route::post('/espera/filtrar', [ListaEsperaController::class, 'filtrar'])->name('espera.filtrar');
    Route::resource('/cupo', CupoController::class);
    Route::post('/cupo/filtrar', [CupoController::class, 'filtrar'])->name('cupo.filtrar');
});
Route::get('listaespera', [ListaEsperaController::class, 'create_espera'])->name('lista.espera');
Route::post('listaespera', [ListaEsperaController::class, 'store_espera'])->name('lista.espera.store');