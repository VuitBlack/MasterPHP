<?php
/** Una excepción es un fallo que se produce al ejecutar un programa */

/** TRY _ CATCH -> sirve para capturar excepciones en codigo susceptible a error, al CATCH se le pasa el objeto 
    de tipo Exception y una variable $e donde se almacenará el error.
    */
try{
    if(isset($_GET['id'])){
        echo "<h1>El parámetro es: {$_GET['id']}</h1>";
    }else{
        throw new Exception('Faltan parámetros por URL');
    }
    

}catch(Exception $e){
    echo "Se ha generado el error: ".$e->getMessage().'<br/>';
}

?>