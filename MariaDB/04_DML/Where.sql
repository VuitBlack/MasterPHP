/**
 * Author:  Ricardo Sandoval
 * Created: 3 abr 2024
 */

# CONSULTA CON UNA CONDICIÓN
SELECT * FROM usuarios WHERE email='admin@admin.com';

# Ejemplos:
# Seleccionar el nombre y apellidos de todos los usuarios que se registraron en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)=2019;

# Seleccionar el nombre y apellidos de todos los usuarios que NO se registraron en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)!=2019;

# Seleccionar el nombre y apellidos de todos los usuarios que NO se registraron en 2019 o no tengan fecha de registro
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)!=2019 or ISNULL(fecha);

# Seleccionar el nombre y los apellidos de los usuarios que en el apellido tengan la letra "a" y el password sea "1234"
SELECT nombre, apellidos FROM usuarios WHERE apellidos LIKE '%a%' and password='1234';

# Seleccioanr todos los registros de usuarios en los que el año sea PAR.
SELECT * FROM usuarios WHERE YEAR(fecha)%2 = 0;

# Seleccionar todos los registros de usuaros que el nombre tenga más de 5 letras y se hayan registrado antes de 2020
SELECT * FROM usuarios WHERE LENGTH =(nombre > 5) and YEAR(fecha)<2020;
