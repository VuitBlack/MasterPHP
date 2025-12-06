<h1>Detalle del pedido</h1>

<div class="resumen-pedido" >
        <div class="texto-confirmado" style="color: black">
            <p><h4>Pedido realizado con el ID: <?php echo $pedido->id; ?></h4></p>
        </div>
        <br/>
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
        <a href="<?=base_url?>pedido/index" class="button button-pedido">Realizar otro pedido</a>
    </div>


