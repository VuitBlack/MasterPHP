<h1>{{ $titulo }}</h1>
<h2>Películas</h2>
<ul>
    @foreach ($peliculas as $pelicula) 
        <li>{{ $pelicula }}</li>
    @endforeach
</ul>

<p>{{date('Y')}}</p>
