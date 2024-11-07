<!-- Mostrar datos de la apertura y caja en inputs readonly -->
<div class="row mb-4">
    <div class="col-md-3">
        <label><strong>Apertura:</strong></label>
        <input type="text" class="form-control" value="{{ $apertura->apertura }}" readonly>
    </div>
    <div class="col-md-3">
        <label><strong>Caja:</strong></label>
        <input type="text" class="form-control" value="{{ $caja->nombre }}" readonly>
    </div>
    <div class="col-md-3">
        <label><strong>Monto Inicial (Bs):</strong></label>
        <input type="text" class="form-control" value="{{ number_format($apertura->monto_inicial_bolivares, 2) }}" readonly>
    </div>
    <div class="col-md-3">
        <label><strong>Monto Inicial ($):</strong></label>
        <input type="text" class="form-control" value="{{ number_format($apertura->monto_inicial_dolares, 2) }}" readonly>
    </div>
</div>

<!-- Totales Generales (arriba) -->
<div class="row mb-4">
    <div class="col-md-6">
        <label><strong>Total Bolívares:</strong></label>
        <input type="text" class="form-control" value="{{ number_format($montoBs, 2) }}" readonly>
    </div>
    <div class="col-md-6">
        <label><strong>Total Dólares:</strong></label>
        <input type="text" class="form-control" value="{{ number_format($montoDolar, 2) }}" readonly>
    </div>
</div>

<!-- Totales por Método de Pago -->
<div class="row mb-4">
    <div class="col-md-4">
        <label><strong>Total Transferencia:</strong></label>
        <input type="text" class="form-control" value="{{ number_format($transaferencia, 2) }}" readonly>
    </div>
    <div class="col-md-4">
        <label><strong>Total Pago Móvil:</strong></label>
        <input type="text" class="form-control" value="{{ number_format($pagoMovil, 2) }}" readonly>
    </div>
    <div class="col-md-4">
        <label><strong>Total Efectivo:</strong></label>
        <input type="text" class="form-control" value="{{ number_format($efectivo, 2) }}" readonly>
    </div>
</div>
<div class="row mb-4">
    <div class="col-md-4">
        <label><strong>Total Divisa:</strong></label>
        <input type="text" class="form-control" value="{{ number_format($divisa, 2) }}" readonly>
    </div>
    <div class="col-md-4">
        <label><strong>Total Punto de Venta:</strong></label>
        <input type="text" class="form-control" value="{{ number_format($punto, 2) }}" readonly>
    </div>
</div>

<!-- Tabla de Movimientos -->
<h4>Movimientos</h4>
<table class="table" id="movimientosTable">
    <thead>
        <tr>
            <th>Venta ID</th>
            <th>Total en Bolívares</th>
            <th>Total en Dólares</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movimientos as $movimiento)
        <tr>
            <td>{{ $movimiento['venta_id'] }}</td>
            <td>{{ number_format($movimiento['total_bolivares'], 2) }}</td>
            <td>{{ number_format($movimiento['total_dolares'], 2) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@if($apertura->estatus === 'Cerrado')

<!-- Botón para cerrar caja -->
<form action="{{ route('aperturas.update', $apertura->id) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit" class="btn btn-primary mt-3">Cerrar Caja</button>
</form>
@endif
@section('js')
<script>
    $(document).ready(function() {
        $('#movimientosTable').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.3/i18n/es-ES.json'
            }
        });
    });
</script>
@endsection
