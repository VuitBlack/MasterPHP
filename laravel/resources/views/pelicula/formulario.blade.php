<h1>Formulario de registro LARAVEL 12</h1>

<form action="{{ action([\App\Http\Controllers\PeliculaController::class, 'recibir']) }}" method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <p>
        <label for="apellids">Apellido</label>
        <input type="text" name="apellidos" id="apellidos">
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    <p>
        <input type="submit" value="Guardar">
</form>