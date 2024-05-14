<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!--Main Content-->
<div id="principal">
    <h1>Crear categorias</h1>
    <p>
        Añade nuevas categorías al blog para que los usuarios 
        puedan usarlas al crear sus entradas.
    </p>
    <br/>
    <form action="guardarcategoria.php" method="post">
        <label for="nombre">Nombre de la categoría:</label>
        <input type="text" name="nombre" />

        <input type="submit" value="Guardar" />
    </form>
</div> <!-- Fin PRINCIPAL -->


<?php require_once 'includes/pie.php'; ?>