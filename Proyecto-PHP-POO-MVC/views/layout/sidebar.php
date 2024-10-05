<!-- SIDE BAR -->
<aside id="lateral">
    <div id="login" class="block_aside">
        <div id="error login" class="error">
        <?php if(isset($_SESSION['error_login'])): ?>
            <?php echo $_SESSION['error_login']; ?>
            <?php unset($_SESSION['error_login']); ?>
        <?php endif; ?>
        </div>
        <?php if(!isset($_SESSION['identity'])): ?>
            <h3>Accede a la WEB</h3>
            <form action="<?=base_url ?>usuario/login" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" required/>
                <label for="password">Password</label>
                <input type="password" name="password" required />
                <input type="submit" value="Login" />
            </form>  
        <!-- Compruebo si la sesión esta iniciada como usuario o adminiatrador y lo identifico en el mensaje -->  
        <?php elseif(isset($_SESSION['identity']) && !isset($_SESSION['admin'])): ?>
            <h3><?=$_SESSION['identity']->nombre ?> <?=$_SESSION['identity']->apellidos ?></h3>
        <?php elseif(isset($_SESSION['identity']) && isset($_SESSION['admin'])): ?>
            <h3>ADMIN: <?=$_SESSION['identity']->nombre ?> <?=$_SESSION['identity']->apellidos ?></h3>   
        <?php endif; ?>
        <ul>
            <?php if(isset($_SESSION['admin'])): ?>
                <li>
                    <div id="icono">
                        <img src="<?=base_url?>Assets/img/categorias_ico.png" alt="Gest_Categ_ico">
                        <a href="<?=base_url?>categoria/index">Gestionar Categorías</a>
                    </div>
                </li>
                <li>
                    <div id="icono">
                        <img src="<?=base_url?>Assets/img/gestion_produc_ico.png" alt="Gest_Produc_ico">
                        <a href="<?=base_url?>producto/gestion">Gestionar Productos</a>
                    </div>
                </li>
                <li>
                    <div id="icono">
                        <img src="<?=base_url?>Assets/img/gestion_ped_ico.png" alt="Gest_Pedido_ico">
                        <a href="#">Gestionar Pedidos</a>
                    </div>
                </li>
            <?php endif; ?>
            <?php if(isset($_SESSION['identity']) || isset($_SESSION['admin'])): ?>
                <li>
                    <div id="icono">
                        <img src="<?=base_url?>Assets/img/pedidos_ico.png" alt="MisPedidos_ico">
                        <a href="#">Mis Pedidos</a>
                    </div>
                </li>
                <li>
                    <div id="icono">
                        <img src="<?=base_url?>Assets/img/candado_ico.png" alt="Cerrar_ico">
                        <a href="<?=base_url?>usuario/logout">Cerrar sesión</a>
                    </div>    
                </li>
            <?php else: ?>    
                <li>
                    <div id="icono">
                        <img src="<?=base_url?>Assets/img/SignIN_ico.png" alt="SingIN_ico">
                        <a href="<?=base_url?>usuario/registro">Sign in</a>
                    </div>    
                </li>
            <?php endif; ?>
        </ul>
    </div>
</aside>

<!-- MAIN BODY -->
<div id="central">