<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AktivitasController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('aktivitas', AktivitasController::class);
