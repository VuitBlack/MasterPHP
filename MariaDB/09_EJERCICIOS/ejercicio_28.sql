/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 28
# Mostrar todos los vendedores y el numero de cliente, mostrar tengan o no clientes.

SELECT CONCAT(v.nombre,' ',v.apellidos) AS 'Nombre completo Vendedor', COUNT(C.id) AS 'Nº de Clientes'
FROM vendedores v
LEFT JOIN clientes c on c.vendedor_id = v.id
GROUP BY v.id ASC;