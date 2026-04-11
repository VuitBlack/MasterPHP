<h1>Listado de frutas</h1>
<ul>
    @foreach ($frutas as $fruta)
        <li>
            <a
                href="{{ action([\App\Http\Controllers\FrutaController::class, 'detail'], ['id' => $fruta->id]) }}">{{ $fruta->nombre }}</a>
        </li>
    @endforeach
</ul>