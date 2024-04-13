/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 18
# MOSTRAR los clientes que han hecho algún encargo de coches 'Mercedes Benz Ranchera'

SELECT e.id AS 'Numero Encargo', cl.nombre AS 'Nombre Cliente', CONCAT(co.marca,' ',co.modelo) AS 'Marca y Modelo'
FROM encargos e 
INNER JOIN clientes cl ON cl.id=e.cliente_id
INNER JOIN coches co ON co.id=coche_id
WHERE e.coche_id IN
    (SELECT id FROM coches WHERE marca='Mercedes Benz' AND modelo='Ranchera');

# Método con subconsultas anidadas
SELECT * FROM clientes WHERE id IN
    (SELECT cliente_id FROM encargos WHERE coche_id IN
        (SELECT id FROM coches WHERE marca='Mercedes Benz' AND modelo LIKE '%Ranchera%')
    );