/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 21
# Mostrar el nombre y las ciudades de los clientes que tengan 3 o más encargos.

SELECT nombre, ciudad FROM clientes WHERE id IN
    (SELECT cliente_id FROM encargos WHERE cantidad>=3);