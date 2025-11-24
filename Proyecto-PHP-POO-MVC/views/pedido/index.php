<?php if(isset($_SESSION['identity'])): ?>
<h1>Realizar Pedido</h1>
<a href="<?=base_url?>carrito/index" class="button">Volver al carrito</a>
<?php else: ?>
<h1>Necesitas estar identificado</h1>
<p>Para hacer un pedido necesitas identificarte en este Website.</p></br
<p>Por favor, identificate en el area de login o registrate en el area de registro.</p>

<?php endif; ?>