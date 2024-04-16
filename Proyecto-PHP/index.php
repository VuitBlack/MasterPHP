<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    </head>
    <body>
        <!--Head-->
        <header id="cabecera">
            <!--Logo-->
            <div id="logo">
                <a href="index.php">
                    Blog de Videojuegos
                </a>
            </div>

            <!--Menú-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 1</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 2</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 3</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 4</a>
                    </li>
                    <li>
                        <a href="index.php">Sobre mí</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div> <!--Esta clase de CSS hace que los elementos del menú permanezcan arriba junto al LOGO-->
        </header>

        <!--Sidebar-->
        <div id="contenedor">
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
                    <h3>Crear cuenta</h3>
                    <form action="register.php" method="POST">
                         <label for="nombre">Nombre</label>
                         <input type="text" name="nombre"/>
                         
                         <label for="apellidos">Apellidos</label>
                         <input type="text" name="apellidos"/>

                         <label for="email">Email</label>
                         <input type="email" name="email"/>
                        
                         <label for="password">Password</label>
                         <input type="password" name="password"/>

                         <input type="submit" value="Registrar"/>
                    </form>
                </div>
            </aside>

            <!--Main Content-->
            <div id="principal">
                <h1>Últimas entradas</h1>
                <article class="entrada">
                    <h2>Título de mi entrada</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in fringilla nibh, ut dapibus lectus. 
                    Nullam commodo quam vel massa malesuada, a iaculis elit imperdiet. Integer vulputate nisi a massa dapibus mattis. 
                    Suspendisse potenti. Morbi et commodo lorem, ultrices pharetra urna.
                    </p>
                    <h2>Título de mi entrada</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in fringilla nibh, ut dapibus lectus. 
                    Nullam commodo quam vel massa malesuada, a iaculis elit imperdiet. Integer vulputate nisi a massa dapibus mattis. 
                    Suspendisse potenti. Morbi et commodo lorem, ultrices pharetra urna.
                    </p>
                    <h2>Título de mi entrada</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in fringilla nibh, ut dapibus lectus. 
                    Nullam commodo quam vel massa malesuada, a iaculis elit imperdiet. Integer vulputate nisi a massa dapibus mattis. 
                    Suspendisse potenti. Morbi et commodo lorem, ultrices pharetra urna.
                    </p>
                    <h2>Título de mi entrada</h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in fringilla nibh, ut dapibus lectus. 
                    Nullam commodo quam vel massa malesuada, a iaculis elit imperdiet. Integer vulputate nisi a massa dapibus mattis. 
                    Suspendisse potenti. Morbi et commodo lorem, ultrices pharetra urna.
                    </p>
                </article>
            </div>
        </div>
        <!--Foot-->
        <footer id="pie">
            <p>Desarrollado por Ricardo Sandoval Pérez &copy; 2024</p>
        </footer>
    </body>
</html>
