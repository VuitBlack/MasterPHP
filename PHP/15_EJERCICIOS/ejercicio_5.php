<!-- Lee el contenido del HEADER y lo coloca  -->
<?php require_once 'includes/header.php';


/* 
 * Ejercicio 5:
 * Crear un ARRAY con el contenido de la siguiente tabla y mostrarlo en HTML
 *      ACCION          AVENTURA            DEPORTES
 *      GTA             ASSASINS            FIFA 2024
 *      CALL OF DUTY    CRASH               PES 2024
 *      PUGB            PRINCE OF PERSIA    MOTO-GP 2019
 * 
 * Cada fila debe ir en un fichero separado (includes).
 */


$tabla = array(
    'ACCION' => array('GTA 5', 'Call of Duty', 'PUGB'),
    'AVENTURA' => array('Assasins Creed', 'Crash Bandicot', 'Prince of Persia'),
    'DEPORTES' => array('Fifa 2024', 'PES 2024', 'Moto-GP 2024')    
);

$categorias = array_keys($tabla);

?>
<table border="1">
    <?php require_once 'includes/tablaHeader.php'; ?>
    <?php require_once 'includes/fila_1.php'; ?>
    <?php require_once 'includes/fila_2.php'; ?>
    <?php require_once 'includes/fila_3.php'; ?>
 </table>

<!-- Lee el contenido del FOOTER y lo coloca  -->
<?php require_once 'includes/footer.php'; ?>