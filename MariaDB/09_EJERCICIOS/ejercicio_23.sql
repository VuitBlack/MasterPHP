/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 23
# Mostrar todos los encargos realizados con la marca de choche y el nombre del cliente.

SELECT e.id AS 'Nº Encargo', e.cantidad AS 'Cantidad', CONCAT(co.marca,' ',co.modelo) AS 'Marca del Coche', cl.nombre 'Nombre Cliente'
FROM encargos e
INNER JOIN coches co ON co.id=e.coche_id
INNER JOIN clientes cl ON cl.id=e.cliente_id;

# Con Multitabla
SELECT e.id AS 'Nº Encargo', e.cantidad AS 'Cantidad', CONCAT(co.marca,' ',co.modelo) AS 'Marca del Coche', cl.nombre 'Nombre Cliente'
FROM encargos e, coches co, clientes cl
WHERE e.cliente_id=cl.id AND e.coche_id=co.id;