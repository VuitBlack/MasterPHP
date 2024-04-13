/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 30
# Mostrar los datos del vendedor con más antiguedad en el concesionario.

SELECT * FROM vendedores ORDER BY fecha LIMIT 1;

# EJERCICIO 31
# Mostrar los coches con más unidades vendidas

SELECT * FROM coches WHERE id IN
    (SELECT coche_id FROM encargos WHERE cantidad IN
        (SELECT MAX(cantidad) FROM encargos)
    );