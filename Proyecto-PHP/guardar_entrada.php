<?php
if(isset($_POST)){
    //Conexión a la BBDD
    require_once 'includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']):false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']):false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria']:false;
    $usuario = $_SESSION['usuario']['id'];

    //Array de errores
    $errores = array();

    //Validar los datos antes de guardarlos en la BBDD (TÍTULO, DESCRIPCIÓN y CATEGORÍA)
    
    if(!empty($titulo)){
        $titulo_validado = true;
    }else{
        $titulo_validado = false;
        $errores['titulo']="Titulo incorrecto, no puede estar vacío";
    }

    if(!empty($descripcion)){
        $descripcion_validado = true;
    }else{
        $descripcion_validado = false;
        $errores['descripcion']="Descripción incorrecta, no puede estar vacía";
    }

    if(!empty($categoria) && is_numeric($categoria)){
        $categoria_validado = true;
    }else{
        $categoria_validado = false;
        $errores['categoria']="Categoría incorrecta o vacía";
    }

    if(count($errores)==0){
        if(isset($_GET['editar'])){
            $entrada_id = $_GET['editar'];
            $usuario_id = $_SESSION['usuario']['id'];

            $sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion', categoria_id=$categoria ".
                   "WHERE id=$entrada_id AND usuario_id=$usuario_id";
        }else{
            $sql = "INSERT INTO entradas VALUES(NULL, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
        }
        $guardar = mysqli_query($db, $sql);
        header("Location: index.php");
    }else{
        $_SESSION["errores_entrada"]=$errores;
        if(isset($_GET['editar'])){
            header("Location: editar_entradas.php?id=".$_GET['editar']);
        }else{
            header("Location: crear_entradas.php");
        }
    }
}
?>