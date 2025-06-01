<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Carrito;
use App\Models\User;
use App\Models\CarritoItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    // Mostrar el carrito actual
    public function index()
    {
        $user = Auth::user();

        $carrito = $user->carrito()->where('activo', true)->first();

        if (!$carrito) {
            $carrito = Carrito::create([
                'user_id' => $user->id,
                'activo' => true,
            ]);
        }

        $items = $carrito->items()->with('articulo')->get();

        return view('carrito.index', compact('items'));
    }

    // Agregar un artículo al carrito
    public function store(Request $request)
    {
        $request->validate([
            'articulo_id' => 'required|exists:articulos,articulo_id',
            'cantidad' => 'required|integer|min:1'
        ]);

        $user = Auth::user();

        $carrito = $user->carrito()->where('activo', true)->firstOrCreate([
            'user_id' => $user->id
        ]);

        $item = $carrito->items()->where('articulo_id', $request->articulo_id)->first();

        if ($item) {
            $item->cantidad += $request->cantidad;
            $item->save();
        } else {
            $carrito->items()->create([
                'articulo_id' => $request->articulo_id,
                'cantidad' => $request->cantidad
            ]);
        }

        return redirect()
            ->route('carrito.index')
            ->with('feedback.message', 'Artículo agregado al carrito correctamente')
            ->with('feedback.type', 'success');
    }

    // Actualizar cantidad de un ítem
    public function update(Request $request, $id)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1'
        ]);

        $item = CarritoItem::findOrFail($id);
        $item->cantidad = $request->cantidad;
        $item->save();

        return redirect()
            ->route('carrito.index')
            ->with('feedback.message', 'Cantidad actualizada correctamente')
            ->with('feedback.type', 'success');
    }

    // Eliminar un ítem del carrito
    public function destroy($id)
    {
        $item = CarritoItem::findOrFail($id);
        $item->delete();

        return redirect()
            ->route('carrito.index')
            ->with('feedback.message', 'Artículo eliminado del carrito correctamente')
            ->with('feedback.type', 'success');
    }
}
