<?php

function mostrarError($errores, $campo){
    $alerta ='';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
    return $alerta;
}

function borrarErrores(){
    $borrado = false;

    if(isset($_SESSION['errores'])){;
        $_SESSION['errores'] = null;            //si falla el códgio quitar está linea
        $borrado = true;
    }
    if(isset($_SESSION['completado'])){;
        $_SESSION['completado'] = null;         //si falla el códgio quitar está linea
        $borrado = true;
    }
    if(isset($_SESSION['errores_entrada'])){;
        $_SESSION['errores_entrada'] = null;       //si falla el códgio quitar está linea
        $borrado = true;
    }
    return $borrado;
}

function getCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql);
    $result = array();

    if($categorias && mysqli_num_rows($categorias) >= 1){
        $result = $categorias;
    }
    return $result;
}

function getEntrada($conexion, $id){
    $sql = "SELECT e.*, c.nombre as 'categoria', CONCAT(u.nombre,' ',u.apellidos) as usuario FROM entradas e ".
           "INNER JOIN categorias c ON e.categoria_id = c.id ".
           "INNER JOIN usuarios u ON e.usuario_id = u.id ".
           "WHERE e.id=$id";
    $entrada = mysqli_query($conexion, $sql);

    $resultado = array();
    if($entrada && mysqli_num_rows($entrada)>=1){
        $resultado = mysqli_fetch_assoc($entrada);
    }
    return $resultado;
}

function getCategoriaMenu($conexion, $id){
    $sql = "SELECT * FROM categorias WHERE id = $id;";
    $categorias = mysqli_query($conexion, $sql);
    $result = array();

    if($categorias && mysqli_num_rows($categorias) >= 1){
        $result = mysqli_fetch_assoc($categorias);
    }
    return $result;
}

function getEntradas($conexion, $limit, $categoria){
    $sql = "SELECT e.*, c.nombre as 'categoria' FROM entradas AS e ".
           "INNER JOIN categorias AS c ON e.categoria_id = c.id ";
           
    // Concateno WHERE el ID de la categoría para obtener las entradas de esa categoría.
    if(!empty($categoria)){
        $sql .= "WHERE e.categoria_id = $categoria ";
    }

    $sql .= "ORDER BY e.id DESC ";
    // Concateno el límite de 4 entradas para el index si recibimos true en la variable limit.
    if($limit){
        $sql .= "LIMIT 4";
    }

    $entradas = mysqli_query($conexion, $sql);
    $result = array();

    if($entradas && mysqli_num_rows($entradas) >= 1){
        $result = $entradas;
    }
    return $result;
}

?>