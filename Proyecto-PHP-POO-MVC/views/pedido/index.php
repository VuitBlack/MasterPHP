<?php if(isset($_SESSION['identity'])): ?>
<h1>Realizar Pedido</h1>
<p>
    <a href="<?=base_url?>carrito/index">Volver al carrito</a>
</p>
<br/>
<h3>Datos del envío</h3>
<form action="<?=base_url?>pedido/add" method="POST">
    <p>
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required>
    </p>
    <p>
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" required>
    </p>
    <p>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required>
    </p>
    <input type="submit" value="Realizar Pedido">
</form>

<?php else: ?>
<h1>Necesitas estar identificado</h1>
<p>Para hacer un pedido necesitas identificarte en este Website.</p></br>
<p>Por favor, identificate en el area de login o registrate en el area de registro.</p>

<?php endif; ?>