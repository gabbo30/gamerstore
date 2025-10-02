<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/', [ArticuloController::class, 'index']);
Route::post("/agregar", [ArticuloController::class, "create_article"])->name("article.create");
Route::post("/editar", [ArticuloController::class, "update_article"])->name("article.update");
Route::get("/eliminar-{id}", [ArticuloController::class, "delete_article"])->name("article.delete");

