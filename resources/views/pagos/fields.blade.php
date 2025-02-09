<form action="{{ route('pagos.update', $pago->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="tipo" class="form-label">Cliente</label>
            <input type="text" class="form-control mb-2" id="Cliente" value="{{ $pago->user->name }}" readonly>
        </div>
        @if($pago->tipo == 'Venta Online' || $pago->tipo == 'Venta Regular')
            <div class="col-md-6">
                <label for="tipo" class="form-label">Venta</label>
                <input type="text" class="form-control mb-2" id="venta" value="{{ $pago->ventas[0]->id ?? ''}}" readonly>
            </div>
        @else

            <div class="col-md-6">
                <label for="tipo" class="form-label">Compra</label>
                <input type="text" class="form-control mb-2" id="venta" value="{{ $pago->compras[0]->id ?? ''}}" readonly>
            </div>
        @endif
        <div class="col-md-6">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" value="{{ $pago->tipo }}" readonly>
        </div>
        <div class="col-md-6">
            <label for="fecha_pago" class="form-label">Fecha de Pago</label>
            <input type="text" class="form-control" id="fecha_pago" value="{{ $pago->fecha_pago }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="monto_total" class="form-label">Monto Total</label>
            <input type="text" class="form-control" id="monto_total" value="{{ $pago->monto_total }}" readonly>
        </div>
        <div class="col-md-6">
            <label for="monto_neto" class="form-label">Monto Neto</label>
            <input type="text" class="form-control" id="monto_neto" value="{{ $pago->monto_neto }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="descuento" class="form-label">Descuento</label>
            <input type="text" class="form-control" id="descuento" value="{{ $pago->descuento }}" readonly>
        </div>
        <div class="col-md-6">
            <label for="tasa_dolar" class="form-label">Tasa Dólar</label>
            <input type="text" class="form-control" id="tasa_dolar" value="{{ $pago->tasa_dolar }}" readonly>
        </div>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Estado</label>
        <select class="form-select" id="status" name="status" required>
            <option value="Pendiente" {{ $pago->status == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="Pagado" {{ $pago->status == 'Pagado' ? 'selected' : '' }}>Pagado</option>
            <option value="Rechazado" {{ $pago->status == 'Rechazado' ? 'selected' : '' }}>Rechazado</option>
            <!-- Add other statuses as needed -->
        </select>
    </div>
    @if($pago->tipo == 'Venta Online' || $pago->tipo == 'Venta Regular')
        <table class="table table-bordered table-striped table-hover text-center my-4">
            <thead class="thead-dark">
                <tr>
                    <th class="align-middle">Producto</th>
                    <th class="align-middle">Precio</th>
                    <th class="align-middle">Cantidad</th>
                    <th class="align-middle">Neto</th>
                    <th class="align-middle">Impuesto</th>
                    <th class="align-middle">Subtotal</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($pago->ventas[0]))
                @foreach ($pago->ventas[0]->detalleVentas as $detalle)
                    <tr>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ $detalle->producto->nombre ?? 'Producto no disponible' }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->precio_producto, 2) }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->cantidad, 2) }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->neto, 2) }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->impuesto, 2) }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->neto + $detalle->impuesto, 2) }}</p>
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    @else
        <table class="table table-bordered table-striped table-hover text-center my-4">
            <thead class="thead-dark">
                <tr>
                    <th class="align-middle">Producto</th>
                    <th class="align-middle">Precio</th>
                    <th class="align-middle">Cantidad</th>
                    <th class="align-middle">Neto</th>
                    <th class="align-middle">Impuesto</th>
                    <th class="align-middle">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($pago->compras[0]))
                @foreach ($pago->compras[0]->detalleCompras as $detalle)
                    <tr>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ $detalle->producto->nombre ?? 'Producto no disponible' }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->precio_producto, 2) }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->cantidad, 2) }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->neto, 2) }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->impuesto, 2) }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle">
                            <p class="mb-0">{{ number_format($detalle->neto + $detalle->impuesto, 2) }}</p>
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    @endif

    <div class="table-responsive mb-4">
        <table class="table table-hover text-center my-4 table-light">
            <thead class="thead-dark">
                <tr>
                    <th class="align-middle text-center">Forma de Pago</th>
                    <th class="align-middle text-center">Banco de Destino</th>
                    <th class="align-middle text-center">Referencia</th>
                    <th class="align-middle text-center">Moneda</th>
                    <th class="align-middle text-center">Monto Total</th>
                    <th class="align-middle text-center">Total Pagado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formaPagoArray as $pago)
                    <tr>
                        <td class="m-0 p-0 align-middle text-center">
                            <p class="mb-0">{{ $pago['metodo'] }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle text-center">
                            <p class="mb-0">{{ $pago['banco_destino'] }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle text-center">
                            <p class="mb-0">{{ $pago['numero_referencia'] }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle text-center">
                            <p class="mb-1">{{ $pago['metodo'] === 'Divisa' ? 'Dólar' : 'Bolívar' }}</p>
                        </td>
                        <td class="m-0 p-0 align-middle text-center">
                            <p class="mb-1">
                                {{ $pago['metodo'] === 'Divisa' ? number_format($pago['monto_dollar'], 2) : number_format($pago['monto_bs'], 2) }}
                            </p>
                        </td>
                        <td class="m-0 p-0 align-middle text-center">
                            <p class="mb-1">{{ number_format($pago['cantidad'], 2) }}</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('pagos.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>