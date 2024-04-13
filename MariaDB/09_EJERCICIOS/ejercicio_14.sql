/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO-14
# Mostar las unidades totales vendidas a cada cliente, mostrando:
# nombre producto, nombre cliente y suma de las unidades.

SELECT CONCAT(c.marca, ' ',c.modelo) AS 'Nombre Producto', cl.nombre AS 'Cliente', SUM(e.cantidad) AS 'Cantidad'
FROM encargos e
INNER JOIN coches c ON c.id=e.cliente_id
INNER JOIN clientes cl ON cl.id=e.cliente_id
GROUP BY e.coche_id, e.cliente_id;