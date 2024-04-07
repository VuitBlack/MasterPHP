/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO-13
# Sacar la medida de sueldos de todos los vendedores por grupo.

SELECT ROUND(AVG(v.sueldo),2) AS 'Salario Medio', v.grupo_id, g.nombre 
FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id
INNER JOIN clientes cl ON C
GROUP BY grupo_id;

