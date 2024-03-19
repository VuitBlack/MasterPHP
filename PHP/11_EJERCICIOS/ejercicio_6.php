
<?php

/*
 *  Mostrar una tabla HTML con las tablas de multiplicar del 1 al 10
 */

echo "<table border='1'><tr> ";  //Inicio de la tabla

echo '<tr>'; //Inicio fila 1 celdas
    for($cabecera=1;$cabecera<=10; $cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }
echo'</tr>'; //Fin fila 1 celdas
    
echo '<tr>'; //Inicio fila 2 celdas
    for($i=1; $i<=10; $i++){
        echo '<td>';
            for($j=1; $j<=10; $j++){
                echo $i.' x '.$j.' = '.($i*$j).'<br/>';
            }
        echo'</td>';
    }
echo'</tr>'; //Fin fila 2 celdas

echo "</table>"; //Fin de la tabla