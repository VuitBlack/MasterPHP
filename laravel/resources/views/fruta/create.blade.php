@if(isset($fruta) && is_object($fruta))
    <h1>Editar fruta</h1>
@else
    <h1>Crear una fruta</h1>
@endif

<form
    action="{{ isset($fruta) ? action([App\Http\Controllers\FrutaController::class, 'update']) : action([App\Http\Controllers\FrutaController::class, 'save']) }}"
    method="POST">
    {{ csrf_field() }}

    @if(isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" value="{{$fruta->id}}">
    @endif

    <P>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"
            value="{{isset($fruta) && is_object($fruta) ? $fruta->nombre : '' }}">
    </P>
    <P>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion"
            value="{{isset($fruta) && is_object($fruta) ? $fruta->descripcion : '' }}">
    </P>
    <P>
        <label for="precio">Precio</label>
        <input type="number" step="0.01" name="precio" id="precio"
            value="{{isset($fruta) && is_object($fruta) ? $fruta->precio : '' }}">
    </P>
    <P>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" value="{{isset($fruta) && is_object($fruta) ? $fruta->fecha : '' }}">
    </P>
    <P>
        <input type="submit" value="@if(isset($fruta) && is_object($fruta)) Actualizar @else Guardar @endif">
    </P>
</form>