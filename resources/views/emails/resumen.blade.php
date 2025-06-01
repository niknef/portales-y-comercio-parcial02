{{-- resources/views/emails/resumen.blade.php --}}
@component('mail::message')
# ¡Gracias por tu compra!

Hola {{ $orden->usuario->name ?? 'Cliente' }}, tu compra fue confirmada exitosamente.

---

## 🧾 Resumen de tu orden:

@foreach ($orden->items as $item)
- {{ $item->cantidad }} x {{ $item->articulo->nombre }} → ${{ number_format($item->precio_unitario * $item->cantidad, 2) }}
@endforeach

---

**Total pagado:** ${{ number_format($orden->total, 2) }}

📅 Fecha de compra: {{ $orden->fecha_compra->format('d/m/Y H:i') }}

@component('mail::button', ['url' => route('checkout.confirmacion')])
Ver confirmación de compra
@endcomponent

Gracias por confiar en nosotros.<br>
**{{ config('app.name') }}**
@endcomponent
