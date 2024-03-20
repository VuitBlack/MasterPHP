<?php

//Principales funciones para trabajar con ARRAYS

$cantantes = ['2pac', 'Drake', 'Rihana', 'Alexia'];
$numeros = ['7','2','5','9','4','1'];

//ASORT Sirve para ordenar el array
echo '<strong>ASORT Sirve para ordenar el array</strong><br/>';
asort($cantantes);
var_dump($cantantes);
echo '<hr/>';

//ARSORT lo ordena por orden alfabético inverso
echo '<strong>ARSORT lo ordena por orden alfabético inverso</strong><br/>';
arsort($cantantes);
var_dump($cantantes);
echo '<hr/>';

//SORT ordena numéricamente
echo '<strong>SORT ordena numéricamente</strong><br/>';
sort($numeros);
var_dump($numeros);
echo '<hr/>';

//AÑADIR ELEMENTOS A UN ARRAY
echo '<strong>Añado un elemento al final con CORCHETES VACÍOS</strong><br/>';
$cantantes[] = "Ed Sheeran";
var_dump($cantantes);
echo '<hr/>';

//ARRAYPUSH
echo '<strong>ARRAY_PUSH Añade un elemento al final</strong><br/>';
array_push($cantantes, 'Bon Jovi');
var_dump($cantantes);
echo '<hr/>';

//ARRY_POP elimina el último elemento del array
echo '<strong>ARRAY_POP Añade un elemento al final</strong><br/>';
array_pop($cantantes);
var_dump($cantantes);
echo '<hr/>';

//UNSET elimina un elemento concreto de un array
echo '<strong>UNSET elimina un elemento concreto de un array</strong><br/>';
unset($cantantes[1]);
var_dump($cantantes);
echo '<hr/>';

//ARRAY_RAND Saca un elemento aleatorio de un array
echo '<strong>ARRAY_RAND Saca un elemento aleatorio de un array</strong><br/>';
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo '<hr/>';



?>

