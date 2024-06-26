<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
    $entrada_actual = getEntrada($db, $_GET['id']);
    if(!isset($entrada_actual['id'])){
        header("Location: index.php");
    }
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!--Main Content-->
<div id="principal">
    <h1>Editar entrada</h1>
    <p>
        <h3>Edita tu entrada: <?=$entrada_actual['titulo']?></h3>
    </p>
    <br/>
    <form action="guardar_entrada.php?editar=<?=$entrada_actual['id']?>" method="post">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo') : ''; ?>

        <label for="descripcion">Descripción:</label>
        <textarea type="text" name="descripcion"><?=$entrada_actual['descripcion']?></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion') : ''; ?>

        <label for="categoria">Categoría:</label>
        <select name="categoria">
            <?php 
                $categorias = getCategorias($db);
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?=$categoria['id']?>"<?=($categoria['id']==$entrada_actual['categoria_id']) ? 'selected="selected"' : ''?>>
                    <?=$categoria['nombre']?>
                </option>
            <?php
                endwhile;
                endif;
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'categoria') : ''; ?>

        <input type="submit" value="Guardar" />
    </form>
    <?php borrarErrores(); ?>
    
</div> <!-- Fin PRINCIPAL -->


<?php require_once 'includes/pie.php'; ?>