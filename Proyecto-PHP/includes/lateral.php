<!--Sidebar-->
<aside id="sidebar">
    <?php if(isset($_SESSION['usuario'])): ?>
        <div id="usuario-loggeado" class="bloque">
            <h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>
            <!-- Botones -->
            <a href="logout.php" class="boton boton-verde">Crear Entrada</a>
            <a href="crearcategoria.php" class="boton">Crear Categoría</a>
            <a href="logout.php" class="boton boton-naranja">Mis Datos</a>
            <a href="logout.php" class="boton boton-rojo">Cerrar Sesión</a>
        </div>
    <?php endif ?>

    <?php if(!isset($_SESSION['usuario'])): ?>
        <div id="login" class="bloque">
        
            <h3>Inciar sesión</h3>

            <?php if(isset($_SESSION['error_login'])): ?>
                <div class="alerta alerta-error">
                    <?=$_SESSION['error_login']; ?>
                </div>
            <?php endif ?>

            <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email"/>
                
                    <label for="password">Password</label>
                    <input type="password" name="password"/>

                    <input type="submit" value="Iniciar"/>
            </form>
        </div>

        <div id="register" class="bloque">
            <h3>Registrarse</h3>
            <!-- Mostrar errores -->
            <?php
                if(isset($_SESSION['completado'])): ?>
                    <div class="alerta alerta-exito">
                        <?=$_SESSION['completado']?>
                    </div> 
            <?php elseif(isset($_SESSION['errores']['general'])): ?>
                <div class="alerta alerta-error">
                    <?=$_SESSION['errores']['general']?>
                </div> 
            <?php endif; ?>
            <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre') : ''; ?>
                    
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos"/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos') : ''; ?>

                    <label for="email">Email</label>
                    <input type="email" name="email"/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email') : ''; ?>
                
                    <label for="password">Password</label>
                    <input type="password" name="password"/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'contraseña') : ''; ?>

                    <input type="submit" name="submit" value="Registrar"/>
            </form>
            <?php borrarErrores(); ?>  
        </div>
    <?php endif; ?>
</aside>