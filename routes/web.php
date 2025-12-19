<?php

use App\Http\Controllers\IngresoController;

Route::get('/', fn() => redirect()->route('ingresos.index'));
Route::resource('ingresos', IngresoController::class);
