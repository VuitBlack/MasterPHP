/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 27
# Mostrar los nombres de los clientes y la cantidad de encargos realizados. 
# Incluyendo los que no hayan realizado encargos.

# INSERT INTO clientes VALUES(NULL, 1, 'Tienda Orgánica Inc', 'Murcia', 0, CURDATE());

SELECT cl.nombre AS 'Nombre Cliente', COUNT(e.id) AS 'Cantidad de Encargos'
FROM clientes cl
LEFT JOIN encargos e ON cl.id=e.cliente_id
GROUP BY cl.id ASC;