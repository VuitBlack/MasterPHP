<h1>Listado de frutas</h1>
<h3><a href="{{ action([\App\Http\Controllers\FrutaController::class, 'crear']) }}">Crear fruta</a></h3>
<ul>
    @foreach ($frutas as $fruta)
        <li>
            <a
                href="{{ action([\App\Http\Controllers\FrutaController::class, 'detail'], ['id' => $fruta->id]) }}">{{ $fruta->nombre }}</a>
        </li>
    @endforeach
</ul>