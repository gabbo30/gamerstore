<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    //
    public function index()
    {
        $articulos = Articulo::all();
        return view('welcome', compact('articulos'));
    }
}
