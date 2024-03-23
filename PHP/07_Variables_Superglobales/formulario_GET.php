<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <!-- El atributo method es el método de envío de dataos (va vibible en la URL y se puede modificar
        mientras que action es donde enviamos los datos-->
        <form method="GET" action="recibir_GET.php"> 
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre...">
            </p>
            <p>
                <label for="apellidos">Apellidos: </label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Escribe tus apellios...">
            </p>
            <input type="submit" value="Enviar Datos"/>
        </form>
    </body>
    
</html>