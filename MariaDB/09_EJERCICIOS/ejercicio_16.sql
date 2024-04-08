/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 8 abr 2024
 */

# EJERCICIO-16
# Mostrar un listado de clientes atendidos por el vendedor 'David Lopez'
/* Modificamos la tabla clientes para diversificar los vendedores.
UPDATE clientes SET vendedor_id=4 WHERE id=3;
UPDATE clientes SET vendedor_id=4 WHERE id=5;
UPDATE clientes SET vendedor_id=2 WHERE id=6;

SELECT * FROM vendedores;
*/

SELECT c.id AS 'Cliente_ID', c.nombre AS 'Nombre Cliente', CONCAT(v.nombre,' ',v.apellidos) AS 'Vendedor' 
FROM clientes c
INNER JOIN vendedores v ON v.id=c.vendedor_id
WHERE v.nombre='David' AND v.apellidos='López'
ORDER BY c.id;

# OTRA MANERA DE RESOLVERLO CON SUBCONSULTAS
SELECT id AS 'Cliente_ID', nombre AS 'Nombre Cliente' FROM clientes WHERE vendedor_id IN
    (SELECT id FROM vendedores WHERE nombre='David' AND apellidos='López');

