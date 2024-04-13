/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 24
# Mostrar los encargos con el nombre del coche, nombre del cliente y el nombre de la ciudad,
# pero únicamente cuando sean de Barcelona.

SELECT e.id AS 'Numero Encargo', CONCAT(co.marca,' ',co.modelo) as 'Nombre del Coche', cl.nombre AS 'Nombre Cliente', cl.ciudad AS 'Ciudad Cliente'
FROM encargos e
INNER JOIN coches co ON co.id=e.coche_id
INNER JOIN clientes cl ON cl.id=e.cliente_id
WHERE cl.ciudad='Barcelona';

