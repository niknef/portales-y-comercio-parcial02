<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Orden;
use App\Models\OrdenItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $carrito = $user->carrito()->where('activo', true)->first();

        if (!$carrito || $carrito->items->isEmpty()) {
            return redirect()->route('carrito.index')->with('feedback.message', 'Tu carrito está vacío')->with('feedback.type', 'warning');
        }

        $items = $carrito->items()->with('articulo')->get();
        $total = $items->sum(fn($item) => $item->articulo->precio * $item->cantidad);

        return view('checkout.index', compact('items', 'total'));
    }

    public function store()
    {
        $user = Auth::user();
        $carrito = $user->carrito()->where('activo', true)->first();

        if (!$carrito || $carrito->items->isEmpty()) {
            return redirect()->route('carrito.index')->with('feedback.message', 'Tu carrito está vacío')->with('feedback.type', 'warning');
        }

        $items = $carrito->items()->with('articulo')->get();
        $total = $items->sum(fn($item) => $item->articulo->precio * $item->cantidad);

        // Crear orden
        $orden = Orden::create([
            'user_id' => $user->id,
            'total' => $total,
            'estado' => 'confirmada',
            'fecha_compra' => now()
        ]);

        // Crear items de orden
        foreach ($items as $item) {
            OrdenItem::create([
                'orden_id' => $orden->id,
                'articulo_id' => $item->articulo->articulo_id,
                'cantidad' => $item->cantidad,
                'precio_unitario' => $item->articulo->precio,
            ]);
        }

        // Vaciar carrito
        $carrito->items()->delete();

        return redirect()->route('checkout.confirmacion');
    }

    public function confirmacion()
    {
        return view('checkout.confirmacion');
    }
}
