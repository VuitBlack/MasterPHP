<h1>Datos recibidos del formulario</h1>
<p>Nombre: {{ $nombre }}</p>
<p>Apellidos: {{ $apellidos }}</p>
<p>Email: {{ $email }}</p>

<a href="{{ action([\App\Http\Controllers\PeliculaController::class, 'formulario']) }}">Volver al formulario</a>