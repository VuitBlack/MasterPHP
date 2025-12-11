<h1>Detalle del pedido</h1>

<div class="resumen-pedido" >

    <div class="resumen-pedido-header">
        <div><h3>Pedido realizado con el ID: <?php echo $pedido->id; ?></h3></div>
        <div class="resumen-pedido-header-texto"><strong>Fecha:</strong> <?php echo $pedido->fecha; ?> </div>
        <div class="resumen-pedido-header-texto"><strong>Estado:</strong> <?=Utils::showStatus($pedido->estado)?></div>
    </div>

    <?php if(isset($_SESSION['admin'])): ?> 
        <form class="form-cambiar-estado" action="<?=base_url?>pedido/cambiarEstado&id=<?=$pedido->id?>" method="post">
            <h4>Cambiar el estado del pedido:</h4>
            <input type="hidden" name="pedido_id" value="<?=$pedido->id?>"/>
            <select name="estado">
                <option value="confirm" <?=$pedido->estado == "confirm" ? 'selected' : '';?>>Pendiente</option>
                <option value="preparation" <?=$pedido->estado == "preparation" ? 'selected' : '';?>>En preparación</option>
                <option value="ready" <?=$pedido->estado == "ready" ? 'selected' : '';?>>Listo para enviar</option>
                <option value="sent" <?=$pedido->estado == "sent" ? 'selected' : '';?>>Enviado</option>
            </select>
            <input type="submit" value="Cambiar estado"/>
        </form> 
    <?php endif; ?>

    <table>
        <tr>
            <th>Unidades</th>
            <th>Nombre</th>
            <th>Precio Unitario</th>
        </tr>
        </thead>
        <tbody>
            <?php if(isset($pedido)): ?>


                <?php while($producto = $productos->fetch_object()): ?> 
                    <tr>
                        <td>
                            <?= $producto->unidades ?>
                        </td>

                        <td>
                            <?= $producto->nombre ?>
                        </td>

                        <td>
                            <?= $producto->precio ?> €
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <br/>
    <div class="total-confirmado">
        <h3>TOTAL: <?php echo $pedido->coste; ?> €</h3>
    </div>
    <br/>
    <div class="texto-confirmado">
    <h3>La dirección de envío es:</h3>
        <?php if(isset($pedido)): ?>
            <p><strong>Provincia:</strong> <?php echo $pedido->provincia; ?></p>
            <p><strong>Localidad:</strong> <?php echo $pedido->localidad; ?></p>
            <p><strong>Dirección:</strong> <?php echo $pedido->direccion; ?></p>
        <?php endif; ?>
    </div>  
    
</div>

<div class="button-confirmado">
    <br/>
    <a href="<?=base_url?>carrito/index" class="button button-pedido">Volver al carrito</a>
    <a href="<?=base_url?>" class="button button-pedido">Volver al inicio</a>
</div>


