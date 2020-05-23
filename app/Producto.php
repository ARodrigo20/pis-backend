<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = array('codigo', 'nombre', 'descripcion', 'cantidad');
    protected $primaryKay = 'id';
}
