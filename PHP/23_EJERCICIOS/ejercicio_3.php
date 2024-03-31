<?php

/* 
 * Ejercicio 3:
 * Hacer una calculadora que sea una interface de usuario (formulario)
 * Debe tener:
 *      - 2 inputs
 *      - 4 botones (suma, resta, multiplicación y división)
 */


$resultado = false;

if(isset($_POST['n1']) && isset($_POST['n2'])){
    
    if(isset($_POST['sumar'])){
        $resultado = 'El resultado de la SUMA es: '.($_POST['n1'] + $_POST['n2']);
    }elseif (isset($_POST['restar'])){
        $resultado = 'El resultado de la RESTA es: '.($_POST['n1'] - $_POST['n2']);   
    }elseif (isset($_POST['multiplicar'])){
        $resultado = 'El resultado de la MULTIPLICACIÓN es: '.($_POST['n1'] * $_POST['n2']);   
    }elseif (isset($_POST['dividir'])){
        $resultado = 'El resultado de la DIVISION es: '.($_POST['n1'] / $_POST['n2']);   
    } 
}
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Calculadora PHP</title>
    </head>
    <body> <!-- INTERFACE - FORMULARIO -->
        <h1>Calculadora PHP</h1>
        <form action="" method="POST">
            <label for="n1">Numero 1</label><br/>
            <input type="number" name="n1" /><br/><br/>
            
            <label for="n2">Numero 2</label><br/>
            <input type="number" name="n2" /><br/><br/>
            
            <input type="submit" value="Sumar" name="sumar">
            <input type="submit" value="Restar" name="restar">
            <input type="submit" value="Multiplicar" name="multiplicar">
            <input type="submit" value="Dividir" name="dividir">
        </form>
        <!-- RESULTADO -->
        <?php
            if($resultado !=false):
                echo '<br/><h3>'.$resultado.'</h3>';
            endif;
        ?>
    </body>
</html>


