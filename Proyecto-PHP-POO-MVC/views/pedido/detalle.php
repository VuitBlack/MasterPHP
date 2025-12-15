<h1>Detalle del pedido</h1>

<div class="resumen-pedido" >

    <div class="resumen-pedido-header">
        <div><h3>Pedido realizado con el ID: <?php echo $pedido->id; ?></h3></div>
        <div class="resumen-pedido-header-texto"><strong>Fecha:</strong> <?php echo $pedido->fecha; ?> </div>
        <div class="resumen-pedido-header-texto"><strong>Estado:</strong> <?=Utils::showStatus($pedido->estado)?></div>
    </div>
    <br/>

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
       
    <table class="texto-confirmado">
            <tr>
                <td class="texto-confirmado">
                    <?php if(isset($_SESSION['admin'])): ?>
                        <h3>Datos del cliente:</h3>
                        <?php if(isset($pedido)): ?>
                            <p><strong>Nombre:</strong> <?php echo $pedido->usuario->nombre; ?></p>
                            <p><strong>Apellidos:</strong> <?php echo $pedido->usuario->apellidos; ?></p>
                            <p><strong>Email:</strong> <?php echo $pedido->usuario->email; ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </td>
                <td class="texto-confirmado">
                    <h3>Dirección de envío:</h3>
                    <?php if(isset($pedido)): ?>
                        <p><strong>Provincia:</strong> <?php echo $pedido->provincia; ?></p>
                        <p><strong>Localidad:</strong> <?php echo $pedido->localidad; ?></p>
                        <p><strong>Dirección:</strong> <?php echo $pedido->direccion; ?></p>
                    <?php endif; ?>
                </td>
            </tr>
         
    </table>
    
</div>

<div class="button-confirmado">
    <br/>
    <a href="<?=base_url?>pedido/gestion" class="button button-pedido">Volver a Gestión Pedidos</a>
    <a href="<?=base_url?>" class="button button-pedido">Volver al inicio</a>
</div>


