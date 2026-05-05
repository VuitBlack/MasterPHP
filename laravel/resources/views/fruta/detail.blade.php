<h1>{{ $fruta->nombre }}</h1>
<p>Descripción: {{ $fruta->descripcion }}</p>
<p>Precio: {{ $fruta->precio }}</p>
<p>Fecha: {{ $fruta->fecha }}</p>

<a href="{{ action([App\Http\Controllers\FrutaController::class, 'delete'], $fruta->id) }}">Eliminar</a>
<a href="">Actualizar</a>