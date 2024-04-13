<!-- INCLUDES:
  Los includes nos permite incorporar código de otros ficheros, por lo que el código no tiene 
  porque estár TODO siempre en un único archivo. Sirve para reutilizar código dentro de otras
  páginas o proyectos. Sirve por ejemplo para crear funciones, cabeceras de páginas o datos 
  de configuración. Se usa para reutilizar lógica de código.

INCLUDE -> incluye la página solicitada tantas veces como se invoque.
INCLUDE_ONCE -> solo incluye la página soliciada una vez aunque se solicite más veces.
REQUIRE -> incluye la página pero si no carga bien para la ejecución completamente.
RERUIRE_ONCE -> solo incluye la página solicitada una vez si hay problemas de carga , para la ejecución completamente
-->

<!-- Lee el contenido del fichero y lo coloca donde se encuetra el include. -->
<?php require_once 'includes/cabecera.php'; ?>


        <!-- Contenido -->
        <div>
            <h2>Esta es la página de inicio de <?=$nombre.' '.$apellidos?></h2>
            <p>Texto de prueba de la página de incio</p>
        </div>
        
        
<?php require_once 'includes/footer.php'; ?>
        
        
        

        
        




