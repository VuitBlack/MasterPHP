<h1>Crear una fruta</h1>
<form action="{{ action([App\Http\Controllers\FrutaController::class, 'save']) }}" method="POST">
    {{ csrf_field() }}
    <P>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
    </P>
    <P>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion">
    </P>
    <P>
        <label for="precio">Precio</label>
        <input type="number" step="0.01" name="precio" id="precio">
    </P>
    <P>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha">
    </P>
    <P>
        <input type="submit" value="Guardar">
    </P>
</form>