/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO-10
# Mostrar los apellidos de los vendedores, su fecha y su grupo, 
# ordenados por fecha descendente y mostrar los 4 últimos

SELECT apellidos, fecha, grupo_id FROM vendedores ORDER BY fecha DESC LIMIT 4;