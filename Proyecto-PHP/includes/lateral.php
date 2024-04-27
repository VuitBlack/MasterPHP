<!--Sidebar-->
<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>Inciar sesión</h3>
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
        <form action="registro.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"/>
                
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos"/>

                <label for="email">Email</label>
                <input type="email" name="email"/>
            
                <label for="password">Password</label>
                <input type="password" name="password"/>

                <input type="submit" name="submit" value="Registrar"/>
        </form>
    </div>
</aside>