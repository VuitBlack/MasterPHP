<?php if (isset($product)): ?>

    <h1><?= $product->nombre ?></h1>

    <?php if ($product->imagen != null): ?>
        <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
    <?php else: ?>
        <img src="<?= base_url ?>Assets/img/Camiseta_1.png" />
    <?php endif; ?>

    <p><?= $product->descripcion ?></p>
    <p><?= $product->precio . " €" ?></p>
    <a href="#" class="button">Comprar</a>
    </div>

<?php else: ?>
    <h1>El productducto no existe</h1>
<?php endif; ?>