<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compra extends Model
{
    use HasFactory;
    protected $primaryKey = 'compra_id';

    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'articulo_id', 'articulo_id');
    }

    // Permitir la asignación masiva de estos campos
    protected $fillable = [
        'user_id', // Campo agregado para permitir la asignación masiva
        'articulo_id', // Otro campo que ya está en el modelo
    ];

}
