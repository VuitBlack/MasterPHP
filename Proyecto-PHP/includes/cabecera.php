<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

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
                    <?php 
                        $categorias = getCategorias($db);
                        while($categoria = mysqli_fetch_assoc($categorias)): 
                    ?>
                        <li>
                            <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                        </li>
                    <?php endwhile; ?>
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
        
        <div id="contenedor">
