@extends('layout.app')
@section('title', 'Carrito de Compras')
@section('content')
<div class="container mt-4">
    <h2 class="mb-4">🛒 Mi Carrito</h2>

    @if($items->count() > 0)
    <table class="table table-bordered rounded overflow-hidden align-middle">
        <thead class="table-dark">
            <tr>
                <th class="text-center">Artículo</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0; @endphp
            @foreach($items as $item)
                @php
                    $subtotal = $item->articulo->precio * $item->cantidad;
                    $total += $subtotal;
                @endphp
                <tr class="align-middle">
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('images/productos/' . $item->articulo->imagen) }}" alt="{{ $item->articulo->nombre }}" style="width: 50px; height: 50px; object-fit: cover;" class="rounded">
                            <span>{{ $item->articulo->nombre }}</span>
                        </div>
                    </td>
                    <td class="text-center">${{ number_format($item->articulo->precio, 2) }}</td>
                    <td class="text-center">
                        <form action="{{ route('carrito.update', $item->id) }}" method="POST" class="d-flex justify-content-center align-items-center gap-2">
                            @csrf
                            @method('PUT')
                            <input type="number"
                                name="cantidad"
                                value="{{ $item->cantidad }}"
                                min="1"
                                class="form-control form-control-sm text-center align-self-center m-0"
                                style="width: 80px;">
                            <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                        </form>
                    </td>
                    <td class="text-center">${{ number_format($subtotal, 2) }}</td>
                    <td class="text-center">
                        <form action="{{ route('carrito.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr class="table-light fw-bold">
                <td colspan="3" class="text-end">Total:</td>
                <td colspan="2">${{ number_format($total, 2) }}</td>
            </tr>
        </tbody>
    </table>

    {{-- Acciones --}}
    <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('articulos.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-plus me-1"></i> Seguir comprando
        </a>
        <a href="#" class="btn btn-success">
            <i class="fas fa-shopping-cart me-1"></i> Finalizar Compra
        </a>
    </div>
@else
    <p class="text-muted text-center my-5">Tu carrito está vacío.</p>
     <a href="{{ route('articulos.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-plus me-1"></i> Agrega artículos
        </a>
@endif
</div>
@endsection
