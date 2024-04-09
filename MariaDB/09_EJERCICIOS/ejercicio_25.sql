/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 25
# Listar los nombres de los clientes con el importe de encargos acumulado

SELECT cl.nombre AS 'Nombre Cliente', SUM(e.cantidad*co.precio) AS 'Total Gastado'
FROM encargos e
INNER JOIN clientes cl ON cl.id=e.cliente_id
INNER JOIN coches co ON co.id=e.coche_id
GROUP BY e.cliente_id;