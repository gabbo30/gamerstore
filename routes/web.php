<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/', [ArticuloController::class, 'index']);
