/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO-5
# Mostrar todo los vendedores pero solu su nombre y los días que lleva en el concesionario.

UPDATE vendedores SET fecha='2017-12-03' WHERE id=4;

SELECT nombre, DATEDIFF(CURDATE(),fecha) AS 'Dias de alta' FROM vendedores;
