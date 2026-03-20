<h1>{{ $titulo }}</h1>
<p>(Acción index del controlador PeliculaController)</p>


@if (isset($pagina))
    <p>La página solicitada es: {{ $pagina }}</p>
@else
<p>No has especificado una página</p>
@endif
