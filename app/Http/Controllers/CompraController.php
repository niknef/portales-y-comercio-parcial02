<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Articulo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    public function store($articulo_id)
    {
        Compra::create([
            'user_id' => Auth::id(),
            'articulo_id' => $articulo_id,
        ]);

        // Agregar el mensaje de éxito a la sesión
        session()->flash('feedback.message', 'Compra completada');
        session()->flash('feedback.type', 'success');

        // Volver a la misma vista
        return back();
    }
}
