<h1>Algunos de nuestros productos</h1>

<?php while($produt = $productos->fetch_object()): ?>
    
    <div class="product">
        <?php if($produt->imagen !=null): ?>
            <img src="<?=base_url?>uploads/images/<?=$produt->imagen?>" />
        <?php else: ?>
            <img src="<?=base_url?>Assets/img/Camiseta_1.png" />    
        <?php endif; ?>
        <h2><?=$produt->nombre?></h2>
        <p><?=$produt->precio?></p>
        <a href="#" class="button">Comprar</a>
    </div>


<?php endwhile; ?>