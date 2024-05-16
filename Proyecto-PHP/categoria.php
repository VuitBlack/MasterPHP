<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
    $categoria_menu = getCategoriaMenu($db, $_GET['id']);
    if(!isset($categoria_menu['id'])){
        header("Location: index.php");
    }
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!--Main Content-->
<div id="principal">
    <h1>Entradas de <?=$categoria_menu['nombre']?></h1>
    <?php
        $entradas = getEntradas($db, false, $_GET['id']);
        if(!empty($entradas) && mysqli_num_rows($entradas) >=1):
            while ($entrada = mysqli_fetch_assoc($entradas)):
    ?>
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?=substr($entrada['descripcion'], 0, 200)."..."?>
                        </p>
                    </a>
                </article>
    <?php            
            endwhile;
        else:
    ?>
    <div class="alerta">No hay entradas en esta categoría.</div>
    <?php
        endif;
    ?>
</div> <!-- Fin PRINCIPAL -->


<?php require_once 'includes/pie.php'; ?>