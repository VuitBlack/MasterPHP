<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
    Crear producto
</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
    <strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?> 
    <strong class="alert_red">El producto NO se ha creado</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
    </tr>  

    <?php while($prod = $productos->fetch_object()): ?>
        <tr>
            <td><?=$prod->id;?></td>
            <td><?=$prod->nombre;?></td>
            <td><?=$prod->precio;?></td>
            <td><?=$prod->stock;?></td>    
        </tr>
    <?php endwhile; ?>
</table>
