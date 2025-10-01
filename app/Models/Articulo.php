<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    use HasFactory;

    protected $table = 'articulos';

    protected $primaryKey = 'id_articulo';

    protected $fillable = [
        'nombre_articulo',
        'precio_articulo'
    ];
}
