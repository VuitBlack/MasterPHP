<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="<?=base_url?>Assets/css/styles.css" />
</head>

<body>
    <div id="container">
        <!-- HEADER -->
        <header id="header">
            <div id="logo">
                <img src="<?=base_url?>Assets/img/Camiseta_3.png" alt="Camiseta Logo" />
                <a href="index.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>
        <!-- MENU -->
         <?php $categorias=Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="<?=base_url?>">Inicio</a>
                </li>
                <?php while ($cat = $categorias->fetch_object()): ?>
                    <li>
                        <a href="#"><?=$cat->nombre?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </nav>

        <div id="content">