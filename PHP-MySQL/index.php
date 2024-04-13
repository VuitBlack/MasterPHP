<?php
//Conectar a la BBDD

$hostname='localhost';
$username='administrador';
$password='administrador';
$database='phpmysql';

$conexion = mysqli_connect($hostname, $username, $password, $database);

// Comprobar si la conexión funciona 

if(mysqli_connect_errno()){
    echo "La conexión a la BBDD MySQL/MariaDB ha fallado: ".mysqli_connect_error();
} else {
    echo "Conexión CORRECTA a la BBDD MySQL/MariaDB".'<br/>';
}

// Consulta para configurar la configuración de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

echo '<hr/>';
while($nota = mysqli_fetch_assoc($query)){
    echo 'ID: '.$nota['id'].'<br/>';
    echo 'Título: '.$nota['titulo'].'<br/>';
    echo 'Descripción: '.$nota['descripcion'].'<br/>';
    echo 'Color: '.$nota['color'].'<br/>';
    echo '<hr/>';
}

// Insertar datos en la BBDD desde PHP
$sql_insert = "INSERT INTO notas VALUES(NULL,'Nota desde PHP','Esto es una nota insertada desde PHP','green')";

$insert = mysqli_query($conexion, $sql_insert);

if ($insert){
    echo 'Datos INSERTADOS correctamente en la BBDD';
} else {
    echo 'Datos NO INSERTADOS... Error: '.mysqli_error($conexion);
}

?>