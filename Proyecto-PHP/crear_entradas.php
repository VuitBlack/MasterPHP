<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!--Main Content-->
<div id="principal">
    <h1>Crear entradas</h1>
    <p>
        Añade nuevas entradas al blog para que los usuarios 
        puedan leerlas y disfrutar de nuestro contenido.
    </p>
    <br/>
    <form action="guardar_entrada.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" />

        <label for="descripcion">Descripción:</label>
        <textarea type="text" name="descripcion"></textarea>

        <label for="categoria">Categoría:</label>
        <select name="categoria">
            <?php 
                $categorias = getCategorias($db);
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?=$categoria['id']?>">
                    <?=$categoria['nombre']?>
                </option>
            <?php
                endwhile;
                endif;
            ?>
        </select>

        <input type="submit" value="Guardar" />
    </form>
</div> <!-- Fin PRINCIPAL -->


<?php require_once 'includes/pie.php'; ?>