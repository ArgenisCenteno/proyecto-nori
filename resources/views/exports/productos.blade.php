<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio Compra</th>
            <th>Precio Venta</th>
            <th>IVA</th>
            <th>Lote</th>
            <th>Fecha Vencimiento</th>
            <th>Cantidad</th>
            <th>Disponible</th>
            <th>Subcategoría</th>
            <th>Imágenes</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio_compra }}</td>
                <td>{{ $producto->precio_venta }}</td>
                <td>{{ $producto->aplica_iva ? 'Sí' : 'No' }}</td>
                <td>{{ $producto->lote }}</td>
                <td>{{ $producto->fecha_vencimiento }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>{{ $producto->disponible ? 'Disponible' : 'No disponible' }}</td>
                <td>{{ $producto->subCategoria->nombre ?? 'N/A' }}</td>
                <td>
                    @foreach($producto->imagenes as $imagen)
                        {{ $imagen->ruta_archivo }}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
