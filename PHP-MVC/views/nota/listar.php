<h1>Listado de notas</h1>
<?php while($nota = $notas->fetch_object()): ?> <!-- sirve para obtener un ARRAY de objetos -->
    <?=$nota->titulo?> - <?=$nota->fecha?><br/>
<?php endwhile; ?>
