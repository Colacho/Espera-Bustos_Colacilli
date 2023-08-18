<?php

use App\Http\Controllers\MateriaController;

/*
|--------------------------------------------------------------------------
| Materia                                               | Iván, Martín
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['admin']], function () {
    Route::resource('materia', MateriaController::class);
});
