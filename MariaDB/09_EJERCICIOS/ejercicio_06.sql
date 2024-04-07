/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO-6
# Mostrar el nombre y los apellidos de los vendedores en una misma columna,
# su fecha de regitro y el día de la semana en la que se registraron.

SELECT  CONCAT(nombre,' ',apellidos) AS 'Nombre Completo', fecha, DAYNAME(fecha) AS 'Dia de Registro' 
FROM vendedores;