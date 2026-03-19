<!-- IMPRIMIR POR PANTALL -->
<h1><?=$titulo?></h1>
<h2>Películas</h2>
<ul>
    <?php foreach ($peliculas as $pelicula) { ?>
        <li><?=$pelicula?></li>
    <?php } ?>
</ul>
<p>{{date ('Y')}}</p>

<!-- COMENTARIOS-->
<!-- Esto es un comentario html-->
 <?php /* Esto es un comentario en php */ ?>
{{-- Esto es un comentario en Blade --}}

<!-- CONDICIONALES (mostrar si existe la variable)-->
{{-- Condicion ternaria PHP --}}
<?= isset($director) ? $director : '<b><i>No hay director</i></b><br/>' ?>

{{-- Condicion ternaria BLADE --}}
{{ $director ?? 'No hay director' }}

<!-- CONDICIONALES-->
 @if($titulo && count($peliculas) >= 7)
   <h1>El título es: "{{$titulo}}" y el listado es mayor a 7 películas</h1>
 @elseif($titulo) 
    <h1>El título existe pero no hay 7 películas</h1>
 @else
    <h1>El título no existe<h1>
@endif
