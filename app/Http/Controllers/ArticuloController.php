<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ArticuloController extends Controller
{
    //
    public function index()
    {
        $articulos = Articulo::all();
        return view('welcome', compact('articulos'));
    }

    public function create_article(Request $request)
    {
        $articulo = new Articulo();
        $articulo->nombre_articulo = $request->nombre_art;
        $articulo->precio_articulo = $request->precio_art;

        if ($articulo->save())
        {
            return back()->with("Bien", "Producto registrado");
        }
        else
        {
            return back()->with("Error", "Producto NO registrado");
        }
        // return 0;
    }

    public function update_article(Request $request)
    {
        $updated = Articulo::where('id_articulo', $request->id_art)->update([
                'nombre_articulo' => $request->nombre_art,
                'precio_articulo' => $request->precio_art,
            ]);

        if ($updated)
        {
            return back()->with("Bien", "Producto actualizado");
        }
        else
        {
            return back()->with("Error", "Producto NO actualizado");
        }
    }

    public function delete_article($id)
    {
        $product = Articulo::find($id);

    if ($product) {
        // eliminar usando el ORM
        $deleted = $product->delete();

        if ($deleted) {
            return back()->with("Bien", "Producto Eliminado");
        } else {
            return back()->with("Error", "Producto NO Eliminado");
        }
    } else {
        return back()->with("Error", "Producto NO encontrado");
    }
    }
}
