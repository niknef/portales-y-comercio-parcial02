@extends('layout.app')
@section('title', 'Confirmar Compra')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">🧾 Resumen de tu Compra</h2>

    <table class="table table-bordered rounded overflow-hidden align-middle">
        <thead class="table-dark">
            <tr>
                <th>Artículo</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr class="align-middle">
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{ asset('images/productos/' . $item->articulo->imagen) }}" alt="{{ $item->articulo->nombre }}" style="width: 50px; height: 50px; object-fit: cover;" class="rounded">
                            {{ $item->articulo->nombre }}
                        </div>
                    </td>
                    <td>${{ number_format($item->articulo->precio, 2) }}</td>
                    <td>{{ $item->cantidad }}</td>
                    <td>${{ number_format($item->articulo->precio * $item->cantidad, 2) }}</td>
                </tr>
            @endforeach
            <tr class="table-light fw-bold">
                <td colspan="3" class="text-end">Total:</td>
                <td>${{ number_format($total, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <form method="POST" action="{{ route('checkout.store') }}">
        @csrf
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('carrito.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i> Volver al carrito
            </a>
            <button type="submit" class="btn btn-success">
                <i class="fas fa-credit-card me-1"></i> Confirmar Compra
            </button>
        </div>
    </form>
</div>
@endsection
