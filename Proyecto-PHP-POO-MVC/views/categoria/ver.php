<?php if (isset($categoria)): ?>
    <h1><?= $categoria->nombre ?></h1>
    <?php if ($productos->num_rows == 0): ?>
        <p>No hay productos para mostrar</p>
    <?php else: ?>
        <?php while ($produt = $productos->fetch_object()): ?>

            <div class="product">
                <a href="<?= base_url ?>producto/ver&id=<? $product->id ?>">
                    <?php if ($produt->imagen != null): ?>
                        <img src="<?= base_url ?>uploads/images/<?= $produt->imagen ?>" />
                    <?php else: ?>
                        <img src="<?= base_url ?>Assets/img/Camiseta_1.png" />
                    <?php endif; ?>
                    <h2><?= $produt->nombre ?></h2>
                </a>
                <p><?= $produt->precio ?></p>
                <a href="#" class="button">Comprar</a>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>
<?php else: ?>
    <h1>La categoría no existe</h1>
<?php endif; ?>