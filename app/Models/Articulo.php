<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    use HasFactory;

    protected $table = 'articulos'; // nombre de la tabla

    protected $fillable = [
        'nombre',
        'precio'
    ];
}
