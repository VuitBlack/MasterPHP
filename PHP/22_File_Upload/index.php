<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h1>Subir archivos PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"/><br/><br/>
            <input type="submit" name="ENVIAR"/>  
        </form>
        <h1>Listado de imágenes</h1>
        <hr/>
        <?php
            $gestor = opendir('images');

                if($gestor):
                    while(($image = readdir($gestor)) !== false):
                        if($image != '.' && $image != '..'):
                            echo"<img src='images/$image' with='100px'/><br/>";
                        endif;
                    endwhile;
                endif;
        ?>
    </body>
</html>