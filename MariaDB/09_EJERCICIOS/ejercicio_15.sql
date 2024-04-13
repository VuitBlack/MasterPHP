/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO 15
# Mostrar los dos clientes con más pedidos y mostar el número de pedidos

# INSERT INTO encargos VALUES (NULL, 4, 4, 3, CURDATE());


SELECT e.cliente_id AS 'Número Cliente', c.nombre AS 'Nombre Cliente', COUNT(e.id) AS 'Número Pedidos' 
FROM encargos e
INNER JOIN clientes c ON c.id=e.cliente_id
GROUP BY cliente_id
ORDER BY 3 DESC LIMIT 2;