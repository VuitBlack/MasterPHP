/**
 * Author:  Ricardo Sandoval
 * Created: 3 abr 2024
 */

# Order by - sirve para ordenar por un campo en concreto ASC o DESC

# Ejemplos:
# Ordenar la tabla usuarios por el nombre de forma descendente.
SELECT * FROM usuarios ORDER BY nombre DESC;

# Ordenar la tabla usuarios por el apellido de forma ascendente
SELECT * FROM usuarios ORDER BY apellidos ASC;

# Ordenar la tabla usuarios por fecha ascendente
SELECT * FROM usuarios ORDER BY fecha ASC;

# LIMIT limita el numero de registros que muestra al numero mostrado o el intervalo
# en el intervalo el primer número es en el que empieza a mostrar y el segundo el numero de registros que muestra.

# Muestra los dos primeros registro de la tabla usuarios
SELECT * FROM usuarios LIMIT 2;

# Muestra los tres primeros registro de la tabla usuarios
SELECT * FROM usuarios LIMIT 3;

# Muestra los retistros del 2 al 3 de la tabla usuarios
SELECT * FROM usuarios LIMIT 1,2;

# Muestra los retistros del 3 al 5 de la tabla usuarios
SELECT * FROM usuarios LIMIT 2,3;

