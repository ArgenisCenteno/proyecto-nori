<form action="{{ route('aperturas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="caja_id" class="form-label">Caja</label>
        <select class="form-select" id="caja_id" name="caja_id" required>
            <option value="">Seleccione una caja</option>
            @foreach($cajas as $caja)
                <option value="{{ $caja->id }}">{{ $caja->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="usuario_id" class="form-label">Usuario</label>
        <input type="text" class="form-control"  value="{{ auth()->user()->name }}"
            readonly>
            <input type="hidden" class="form-control" id="usuario_id" name="usuario_id" value="{{ auth()->user()->id }}"
            >
    </div>
    <div class="mb-3">
        <label for="monto_inicial_bolivares" class="form-label">Monto Inicial en Bolívares</label>
        <input type="number" class="form-control" id="monto_inicial_bolivares" name="monto_inicial_bolivares"
            step="0.01" required>
    </div>
    <div class="mb-3">
        <label for="monto_inicial_dolares" class="form-label">Monto Inicial en Dólares</label>
        <input type="number" class="form-control" id="monto_inicial_dolares" name="monto_inicial_dolares" step="0.01"
            required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>