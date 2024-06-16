<h1>Listado de Usuarios</h1>
<?php while($usuario = $getAllUsers->fetch_object()): ?> <!-- sirve para obtener un ARRAY de objetos -->
    <?=$usuario->email?> - <?=$usuario->fecha?><br/>
<?php endwhile; ?>