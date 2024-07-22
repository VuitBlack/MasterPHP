<!-- SIDE BAR -->
<aside id="lateral">
    <div id="login" class="block_aside">
        <?php if(!isset($_SESSION['identity'])): ?>
        <h3>Accede a la WEB</h3>
        <form action="<?=base_url ?>usuario/login" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" />
            <label for="password">Password</label>
            <input type="password" name="password" />
            <input type="submit" value="Enviar" />
        </form>
        <?php else: ?>
            <h3><?=$_SESSION['identity']->nombre ?> <?=$_SESSION['identity']->apellidos ?></h3>
        <?php endif; ?>
        <ul>
            <li>
                <div id="icono">
                    <img src="<?=base_url?>Assets/img/usuario_ico.png" alt="Usuario_icono">
                    <a href="#">Mis Pedidos</a>
                </div>
            </li>
            <li>
                <div id="icono">
                    <img src="<?=base_url?>Assets/img/gestion_ped_ico.png" alt="Pedido_icono">
                    <a href="#">Gestionar Pedidos</a>
                </div>
            </li>
            <li>
                <div id="icono">
                    <img src="<?=base_url?>Assets/img/candado_ico.png" alt="Categorias_icono">
                    <a href="#">Gestionar Categorías</a>
                </div>
            </li>
        </ul>
    </div>
</aside>

<!-- MAIN BODY -->
<div id="central">