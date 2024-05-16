<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!--Main Content-->
<div id="principal">
    <h1>Todas las entradas</h1>
    <?php
        $entradas = getEntradas($db, false);
        if(!empty($entradas)):
            while ($entrada = mysqli_fetch_assoc($entradas)):
    ?>
                <article class="entrada">
                    <a href="">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                            <?=substr($entrada['descripción'], 0, 200)."..."?>
                        </p>
                    </a>
                </article>
    <?php            
            endwhile;
        endif;
    ?>
    
    
    <div id="ver_todas">
    <a href="">Ver todas las entradas</a>
    </div>
    
</div> <!-- Fin PRINCIPAL -->


<?php require_once 'includes/pie.php'; ?>