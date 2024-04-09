/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 17
# Mostrar los encargos realizados por el cliente 'Frutería Antonia Inc'

SELECT e.id AS'Numero Encargo', e.cantidad, cl.nombre, CONCAT(co.marca,' ',co.modelo) AS 'Marca y Modelo', e.fecha 
FROM encargos e
INNER JOIN clientes cl ON cl.id=e.cliente_id
INNER JOIN coches co ON co.id=e.coche_id
WHERE e.cliente_id IN
    (SELECT id FROM clientes WHERE nombre='Fruteria Antonia Inc');