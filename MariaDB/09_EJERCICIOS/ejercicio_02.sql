/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO 2
# Modificar la comisión de los vendedores y ponerla al 0.5% 
# cuando ganen a partir de 50000€.

Update vendedores SET comision=0.5 WHERE sueldo>=50000;

SELECT * FROM vendedores;