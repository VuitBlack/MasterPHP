<?php
// Iniciar la sesión y la conexión a la BBDD
require_once 'includes/conexion.php';

// Recoger los datos del formulario
if(isset($_POST)){
    // Borrar incio de sesión antiguo fallido
    if(isset($_SESSION['error_login'])){
        session_unset();     // en el curso pone esta linea pero no me funciona  => session_unset($_SESSION['error_login']);
    }

    // Recojo datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta para comprobar las credenciales (Usuario y Contraseña)
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login)==1){
        $usuario = mysqli_fetch_assoc($login);

        // Comprobar la contraseña 
        $verify = password_verify($password, $usuario['password']);
        if($verify){
            // Usar una sesión para guardar los datos del usuario loggeado
            $_SESSION['usuario']=$usuario;

        }else{
            // Si falla enviar una sesión con el fallo
            $_SESSION['error_login']="Login incorrecto";
        }

    }else{
        //Mensaje de error
        $_SESSION['error_login']="Login incorrecto";
    }

}
// Redirigir al Index.php
header('Location: index.php');