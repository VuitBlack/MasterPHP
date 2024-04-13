/**
 * Author:  Ricardo Sandoval
 * Created: 2 abr 2024
 */

# MOSTRAR TODOS LOS REGISTOS DE UNA TABLA
SELECT * FROM usuarios;

# MOSTRAR TODOS LOS REGISTROS DE LAS COLUMNAS DETERMINADAS
SELECT email, nombre, apellidos FROM usuarios;

# OPERADORES ARITMÉTICOS
SELECT email, (4+7) FROM usuarios;

# Usamos AS para poner un alias
SELECT email, (7+7) AS Operacion FROM usuarios;

# Para ordenar los resultados por un campo usamos la cláusula ORDER BY
SELECT id, email, (7+7) AS Operacion FROM usuarios ORDER BY id;

# Sumar columnas, restar, multiplicar y dividir ponemos el nombre de la columna o columnas en la operación.
SELECT id, email, (id+7) AS Operacion FROM usuarios ORDER BY id;
SELECT id, email, (id-7) AS Operacion FROM usuarios ORDER BY id;
SELECT id, email, (id*7) AS Operacion FROM usuarios ORDER BY id;
SELECT id, email, (id/7) AS Operacion FROM usuarios ORDER BY id;

# FUNCIONES MATEMÁTICAS
# VALOR ABSOLUTO
SELECT id, ABS (id/7) AS Operacion FROM usuarios ORDER BY id;

# REDONDEO ALZA
SELECT id, CEIL (id/7) AS Operacion FROM usuarios ORDER BY id;

# REDONDEO BAJA
SELECT id, FLOOR (id/7) AS Operacion FROM usuarios ORDER BY id;

# REDONDEO PARA QUITAR DECIMALES (REDONDEO 2 DECIMALES)
SELECT id, ROUND (id/7, 2) AS Operacion FROM usuarios ORDER BY id;

# RAIZ CUADRADA
SELECT id, SQRT (7*7) AS Operacion FROM usuarios ORDER BY id;


# FUNCIONES PARA CADENA DE CARACTERES

# MOSTRAR TODOS LOS NOMBRES DE USUARIOS EN MAYUSCULAS
SELECT UPPER(nombre) FROM usuarios;

# MOSTRAR TODOS LOS NOMBRES DE USUARIOS EN MAYUSCULAS
SELECT LOWER(nombre) FROM usuarios;

# MOSTRAR TODOS LOS NOMBRES Y APELLIDOS DE USUARIOS JUNTOS en una columna llamada NOMBRE_COMPLETO
SELECT CONCAT(nombre,' ', apellidos) AS 'NOMBRE_COMPLETO' FROM usuarios;

# LENGTH obtiene la longitud de la cadena de caracteres
SELECT email, LENGTH(CONCAT(nombre,' ', apellidos)) AS 'NOMBRE_COMPLETO' FROM usuarios;

# TRIM - quita los espacios por delante y por detrás de cada string.
SELECT email, LENGTH(CONCAT('     ',nombre,' ', apellidos,'    ')) AS 'NOMBRE_COMPLETO' FROM usuarios;
# De la anterior consulta obtenemos unas longitudes de (25,20,19 y null)

SELECT email, LENGTH(TRIM(CONCAT('     ',nombre,' ', apellidos,'    '))) AS 'NOMBRE_COMPLETO' FROM usuarios;
# Después de hacer trim obtenemos unas longitudes de (16, 11, 10 y null)

# FUNCIONES PARA FECHAS

# CURDATE (current data) muestra la fecha actual
SELECT email, fecha, CURDATE() AS 'Fecha Actual' FROM usuarios;

# DATEDIFF obtiene la diferencia entre dos fechas.
SELECT email, fecha, DATEDIFF(CURDATE(), fecha) AS 'Diferencia entre fechas' FROM usuarios;

# DAYNAME obtiene el nombre del día de una fecha en concreto
SELECT email, DAYNAME(fecha), CURDATE() AS 'Fecha Actual' FROM usuarios;

# DAYOFMONTH obtiene el día de una fecha
SELECT email, DAYOFMONTH(fecha), CURDATE() AS 'Fecha Actual' FROM usuarios;

# DAYOFWEEK obtiene el día de una fecha
SELECT email, DAYOFWEEK(fecha), CURDATE() AS 'Fecha Actual' FROM usuarios;

# DAYOFYEAR obtiene el día de una fecha
SELECT email, DAYOFYEAR(fecha), CURDATE() AS 'Fecha Actual' FROM usuarios;

# DAY saca el día, MONTH saca el mes, YEAR saca el AÑO, todos de una fecha
SELECT email, DAY(fecha), CURDATE() AS 'Fecha Actual' FROM usuarios;
SELECT email, MONTH(fecha), CURDATE() AS 'Fecha Actual' FROM usuarios;
SELECT email, YEAR(fecha), CURDATE() AS 'Fecha Actual' FROM usuarios;

# CURTIME saca la hora actual
SELECT email, CURTIME() AS 'HORA Actual' FROM usuarios;

# SYSDATE saca la hora completa del servidor
SELECT email, SYSDATE() AS 'FECHA DEL SERVIDOR' FROM usuarios;

# DATE_FORMAT para formatear una fecha
SELECT email, DATE_FORMAT(fecha, '%D-%M-%Y') ,SYSDATE() AS 'FECHA DEL SISTEMA' FROM usuarios;
SELECT email, DATE_FORMAT(fecha, '%d-%m-%y') ,SYSDATE() AS 'FECHA DEL SISTEMA' FROM usuarios;

# ISNULL() comprueba si en una columna hay elementos nulos 
SELECT email, ISNULL(apellidos) FROM usuarios;

# STRCMP('string_1','string_2') comparar dos campos o cadenas caracter a caracter
# devuelve 0 si son iguales y 1 si son diferentes ver ejemplo.

SELECT email, STRCMP('hola', 'hola') FROM usuarios;
SELECT email, STRCMP(nombre, apellidos) FROM usuarios;

# VERSION() devuelve la versión de MySQL o MariaDB;
SELECT DISTINCT VERSION() FROM usuarios;

# USR() devuelve la versión de MySQL o MariaDB;
SELECT DISTINCT USER() FROM usuarios;

# IFNULL(campo, 'XXXXXX') rellena los registros nulos del campo seleccionado con la cadena elegida
SELECT email, IFNULL(apellidos, 'Este campo está vacío') FROM usuarios;