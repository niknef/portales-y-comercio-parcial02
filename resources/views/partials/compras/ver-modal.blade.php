<div class="modal fade" id="verComprasModal{{ $usuario->id }}" tabindex="-1" aria-labelledby="verComprasLabel{{ $usuario->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h4 class="modal-title" id="verComprasLabel{{ $usuario->id }}">Compras de {{ $usuario->name }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                @if ($usuario->compras && $usuario->compras->count())
                    <ul class="list-group">
                        @foreach ($usuario->compras as $compra)
                            <li class="list-group-item">
                                <strong>Artículo:</strong> {{ $compra->articulo->nombre ?? 'Artículo eliminado' }}<br>
                                <strong>Precio:</strong> ${{ number_format($compra->articulo->precio ?? 0, 2) }}<br>
                                <strong>Fecha de compra:</strong> {{ $compra->created_at->format('d/m/Y H:i') }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Este usuario no tiene compras registradas.</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
