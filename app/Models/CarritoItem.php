<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarritoItem extends Model
{
    protected $fillable = [
        'articulo_id',
        'cantidad',
    ];

    public function carrito()
    {
        return $this->belongsTo(Carrito::class);
    }

    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'articulo_id');
    }
}
