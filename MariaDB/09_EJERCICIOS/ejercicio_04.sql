/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO-4
# Mostrar todos los vendedores cuya fecha de alta sea posterior al 1-7-2022

UPDATE vendedores SET fecha='2017-04-03' WHERE id=8;  # Modifico la fecha para tener un registro anterior a la fecha pedida 

SELECT * FROM vendedores WHERE fecha > '2022-07-01';

