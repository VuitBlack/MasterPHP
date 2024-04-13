/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 20
# Seleccionar el grupo en el que trabaja el vendedor con mayor salario;
# visualizando el nombre del grupo.

SELECT id AS 'Grupo ID', nombre AS 'Nombre del Grupo' 
FROM grupos WHERE id IN
    (SELECT grupo_id FROM vendedores WHERE sueldo IN
        (SELECT MAX(sueldo) FROM vendedores)
    );

