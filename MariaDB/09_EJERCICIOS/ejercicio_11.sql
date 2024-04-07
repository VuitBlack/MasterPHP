/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO-11
# Mostar todos los cargos de los vendedores y en número de vendedores en cada cargo

SELECT cargo, COUNT(id) AS 'Numero de Vendedores' FROM vendedores GROUP BY cargo;
