<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
</head>
<body>
    <!-- CABECERA -->
    @section('header')
        <h1>Cabecera de la página</h1>
    @show
    <hr/>
    <div class="container">
        <!-- CONTENIDO -->
        @yield('content')
    </div>
    <hr/>
    <!-- PIE DE PÁGINA -->
    @section('footer')
        <h3>Pie de página</h3>
    @show
</body>
</html>