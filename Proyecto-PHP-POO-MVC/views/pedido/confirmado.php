<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == "complete"): ?>

    <h1>Tu pedido se ha confirmado</h1>
    <br/>
    <p>Gracias por tu pedido. Tan pronto como realices el pago, procederemos a procesarlo y realizar el envío.</p>
    <p>Este es el resumen de tu pedido:</p>

    <h3>Tu pedido contiene <?php echo count($_SESSION['carrito']); ?> productos:</h3>
    <div class="resumen-pedido" >
        <div class="texto-confirmado" style="color: black">
            <p><h4>El pedido se ha creado con el ID: <?php echo $pedido->id; ?></h4></p>
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
                <?php if(isset($_SESSION['carrito'])): ?>
                    <?php foreach($_SESSION['carrito'] as $indice => $elemento): 
                        // Sacamos el objeto producto para que el código sea más limpio
                        $producto = $elemento['producto']; 
                    ?>
                        <tr>
                            <td>
                                <?= $elemento['unidades'] ?>
                            </td>

                            <td>
                                <?= $producto->nombre ?>
                            </td>

                            <td>
                                <?= $producto->precio ?> €
                            </td>
                        </tr>
                    <?php endforeach; ?>
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
        <a href="<?=base_url?>carrito/delete_all?red=home" class="button button-pedido">Volver al Inicio</a>
    </div>
    

<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != "complete"): ?>
    <h1>Tu pedido no se ha confirmado</h1>
    <br/>
    <a href="<?=base_url?>carrito/index" class="button button-pedido">Volver al carrito</a>
    <a href="<?=base_url?>carrito/delete_all?red=home" class="button button-pedido">Volver al Inicio</a>

<?php endif;?>
