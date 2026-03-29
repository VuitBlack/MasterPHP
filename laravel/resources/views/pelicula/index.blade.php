<h1>{{ $titulo }}</h1>
<p>(Acción index del controlador PeliculaController)</p>


@if (isset($pagina))
    <p>La página es: {{ $pagina }}</p>
@endif

<a href="{{ action([\App\Http\Controllers\PeliculaController::class, 'detalle']) }}">Ir al detalle</a>