/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 22
# Mostrar un listado de clientes con los siguientes datos:
# Nº de cliente, Nombre Cliente, Nº de vendedor, Nombre del vendedor

SELECT c.id AS 'Nº Cliente', c.nombre AS 'Nombre Cliente', v.id AS 'Nº Vendedor', CONCAT(v.nombre,' ',v.apellidos) AS 'Nombre Vendedor'
FROM clientes c
INNER JOIN vendedores v ON v.id=c.vendedor_id
GROUP BY c.id;

# Consulta multitabla
SELECT c.id AS 'Nº Cliente', c.nombre AS 'Nombre Cliente', v.id AS 'Nº Vendedor', CONCAT(v.nombre,' ',v.apellidos) AS 'Nombre Vendedor'
FROM clientes c, vendedores v
WHERE c.vendedor_id=v.id;