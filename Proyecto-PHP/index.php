<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!--Main Content-->
<div id="principal">
    <h1>Últimas entradas</h1>
    <?php
        $entradas = getLastEntradas($db);
        if(!empty($entradas)):
            while ($entrada = mysqli_fetch_assoc($entradas)):
    ?>
                <article class="entrada">
                    <a href="">
                        <h2><?=$entrada['titulo']?></h2>
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