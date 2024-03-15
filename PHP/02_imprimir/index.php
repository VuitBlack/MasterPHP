<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Imprimir por pantalla -Master PHP</title>
    </head>
    <body>
        <h1>Master en PHP - Ricardo Sandoval</h1>
        // con el siguiente codigo haces una impresion simplificada de php igual que el echo.
        <?='Bienvenido al curso de PHP' ?>
        
        <?php
            //Titular de la sección
            echo '<h3>Listado de videjuegos:</h3>';
            /* Esto es una
             * lista de 
             * videjuegos antiguos
             */
            echo '<ul>'
                    .'<li>Mario Bros</li>'
                    .'<li>Sonic</li>'
                    .'<li>Tetris</li>'
                    .'<li>Prince of Persia</li>'
                    .'</ul>';
            //Parrafo de explicación
            echo '<p>Esta es toda'.' - '.'la lista de videjuegos.</p>';
            
        ?>
    </body>
</html>
   
    
