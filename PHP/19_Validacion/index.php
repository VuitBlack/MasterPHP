<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Validación formularios PHP</title>
    </head>
    <body>
        <h1>Validación de formularios PHP</h1>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if ($error == 'faltan_datos'){
                    echo '<strong style="color:red">Introduce todos los datos en los campos del formulario.</strong>';
                }
            }
        ?>
        <form method="POST" action="process_form.php">
            
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+"><br/>
            
            <label for="apellidos">Apellidos</label><br/>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+""><br/>
            
            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"><br/>
            
            <label for="email">Email</label><br/>
            <input type="mail" name="email" required="required"><br/>
            
            <label for="pass">Password</label><br/>
            <input type="password" name="pass" required="required"><br/><br/>
            
            <input type="submit" value="ENVIAR"><br/>
            
        </form>
    </body>
</html>