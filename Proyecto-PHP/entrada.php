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
    <h1><?=$entrada_actual['titulo']?></h1>
    <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
        <h2><?php echo "Categoría: "?><?=$entrada_actual['categoria']?></h2>
    </a>
    <h4><?php echo "Autor: "?><?=$entrada_actual['usuario']?></h4>
    <h4><?php echo "Fecha: "?><?=$entrada_actual['fecha']?></h4>
    <br/>
    <p>
        <?=$entrada_actual['descripcion']?>
    </p>
    <?php if (isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']):?>
        <br/>
        <a href="editar_entrada.php?id=<?=$entrada_actual['id']?>" class="boton boton-verde">Editar Entrada</a>
        <a href="borrar_entrada.php?id=<?=$entrada_actual['id']?>" class="boton boton-naranja">Borrar Entrada</a>
    <?php endif; ?>
</div> <!-- Fin PRINCIPAL -->


<?php require_once 'includes/pie.php'; ?>