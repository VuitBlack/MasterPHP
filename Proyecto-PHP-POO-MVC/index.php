<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="Assets/css/styles.css" />
</head>

<body>
    <div id="container">
        <!-- HEADER -->
        <header id="header">
            <div id="logo">
                <img src="Assets/img/Camiseta_3.png" alt="Camiseta Logo" />
                <a href="index.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>
        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoría 1</a>
                </li>
                <li>
                    <a href="#">Categoría 2</a>
                </li>
                <li>
                    <a href="#">Categoría 3</a>
                </li>
                <li>
                    <a href="#">Categoría 4</a>
                </li>
                <li>
                    <a href="#">Categoría 5</a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <!-- SIDE BAR -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Accede a la WEB</h3>
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" />
                        <label for="password">Password</label>
                        <input type="password" name="password" />
                        <input type="submit" value="Enviar" />
                    </form>
                    <ul>
                        <li>
                            <div id="icono">
                                <img src="Assets/img/usuario_ico.png" alt="Usuario_icono">
                                <a href="#">Mis Pedidos</a>
                            </div>
                        </li>
                        <li>
                            <div id="icono">
                                <img src="Assets/img/gestion_ped_ico.png" alt="Pedido_icono">
                                <a href="#">Gestionar Pedidos</a>
                            </div>
                        </li>
                        <li>
                            <div id="icono">
                                <img src="Assets/img/candado_ico.png" alt="Categorias_icono">
                                <a href="#">Gestionar Categorías</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- MAIN BODY -->
            <div id="central">
                <div class="product">
                    <img src="Assets/img/Camiseta_2.png" />
                    <h2>Camiseta de Manta Oceánica</h2>
                    <p>30€</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="Assets/img/Camiseta_1.png" />
                    <h2>Camiseta de Pelícano</h2>
                    <p>30€</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="Assets/img/Camiseta_3.png" />
                    <h2>Camiseta de Pingüino</h2>
                    <p>30€</p>
                    <a href="#">Comprar</a>
                </div>

            </div>
        </div>

        <!-- FOOTER -->
        <footer id="footer">
            <p>Desarrollado por Ricardo Sandoval &copy; <?= date('Y') ?></p>
        </footer>

    </div>
</body>

</html>