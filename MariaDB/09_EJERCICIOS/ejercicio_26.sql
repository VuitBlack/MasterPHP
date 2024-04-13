/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 26
# Mostrar los vendedore que tienen jefe y el nombre del jefe.

SELECT CONCAT(v.nombre,' ',v.apellidos) AS 'Nombre Vendedor', CONCAT(ve.nombre,' ',ve.apellidos) as 'Nombre Jefe' 
FROM vendedores v
INNER JOIN vendedores ve on v.jefe=ve.id;
