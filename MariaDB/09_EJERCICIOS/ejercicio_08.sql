/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 7 abr 2024
 */

# EJERCICIO-8
# Mostar todos los coches en cuya marca exista la letra 'A' y en cuyo modelo empieze por 'S'

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'S%';