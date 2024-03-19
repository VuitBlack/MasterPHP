<?php

/* CONDICIONALES 
 *  IF:
 * if(condicion){
 *      instrucciones
 * }else{
 *      otras instrucciones
 * }
 */

/* OPERADORES DE CONTROL
 *      == igual que
 *      === identico que (compara que sean el mismo tipo de dato tambien)
 *      != distinto que
 *      <> diferente que
 *      !== no identico a
 *      < menor que
 *      > mayor que
 *      <= menor o igual que
 *      >= mayor o igal que 
 */

/* OPERADORES LÓGICOS
 *      && -->  AND     -->     Y
 *      ||  -->     OR       -->     O
 *      !   -->     NOT     -->     NO
 *      tambien podemos escribir "and" y "or" que hacen igual que && y ||
 */
$color='rojo';

if($color=='rojo'){
    echo '<h2>'.'El color es ROJO'.'</h2>';
}else{
    echo '<h2>'.'El color NO es ROJO'.'</h2>';
}

$year = 2025;

if ($year==2019){
    echo '<h3>'.'Estamos en el año: '.$year.'</h3>';
}elseif($year<2019){
    echo '<h3>'.'Estamos en el año: '.$year.' que es anterior al año: 2019</h3>';
}else{
    echo '<h3>'.'Estamos en el año: '.$year.' que es posterior al año: 2019</h3>';
}

// IF ANIDADOS

$nombre='Ricardo Sandoval';
$ciudad='Madrid';
$continente='Asia';
$edad = 42;
$mayor_edad = 18;

if ($edad >= $mayor_edad){
    echo '<h3>'.$nombre.' es mayor de edad'.'</h3>';
    echo '<h4>'.$nombre.' es de: '.$ciudad.'</h4>';
    if ($continente=='Europa'){
        echo '<h5>'.$nombre.' es de: '.$continente.'</h5>';
    }else{
        echo '<h5>'.$nombre.' NO es Europeo'.'</h5>';
    }
}else{
    echo '<h3>'.$nombre.' NO es mayor de edad'.'</h3>';
}
    
echo '<hr>';
//ELSE-IF

$dia=3;

if ($dia==1){
    echo 'Es lunes';
}else{
    if ($dia==2){
        echo 'Es martes';
    }else{
        if ($dia==3){
            echo 'Es miercoles';
        }else{
            if ($dia==4){
             echo 'Es jueves';
            }else{
                 if ($dia==5){
                echo 'Es viernes';
                 }else{
                     echo 'Es fin de semana';

}}}}}
echo '<hr>';

if ($dia==1){
    echo 'Es lunes';
}elseif($dia==2){
    echo 'Es martes';
}elseif($dia==3){
    echo 'Es miercoles';
}elseif($dia==4){
    echo 'Es jueves';
}elseif($dia==5){
    echo 'Es viernes';
}else{
    echo 'Es fin de semana';
}

echo '<hr>';
// VARIAS CONDICIONES EN UNA CON UN IF
//numero mayor que 50 y menor de 90

$edad_1=18;
$edad_2=64;
$edad_real=22;


if($edad_real>=$edad_1 && $edad_real<=$edad_2){
    echo '<h4>'.$nombre.' esta en edad de trabajar'.'</h4>';
}else{
    echo '<h4>'.$nombre.' esta furea del rango de edad para trabajar'.'</h4>';
}

$pais='Francia';

if($pais =='Mexico' || $pais =='España' || $pais =='Colombia'){
    echo 'En '.$pais.' se habla español.';
}else{
    echo 'En '.$pais.' NO se habla español.';
}

echo '<hr>';
//SWITCH - sirve para comparar una variable con varias opciones y ejecutar una serie de sentencias
//en funcion del resultado.

$diaSemana=5;

switch ($diaSemana){
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default :
        echo "ES FIN DE SEMANA";
}

echo '<hr>';
//GOTO sirve para saltar parte de un programa e ir de un sitio a otro del programa.
//Se necesita crear una marca a la que llamaremos con el goto. Lo cual hace que saltemos de un sitio a otro del programa.

goto marca;
echo '<h3>Instrucción 1</h3>';
echo '<h3>Instrucción 2</h3>';
echo '<h3>Instrucción 3</h3>';
echo '<h3>Instrucción 4</h3>';

marca:
    echo 'Me he saltado 4 echo\'s';

?>