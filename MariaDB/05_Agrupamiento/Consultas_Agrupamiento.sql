/**
 * Author:  Ricardo Sandoval
 * Created: 3 abr 2024
 */

# Básicamente las consultas de agrupamiento nos permiten agrupar filas.

# Mostrar cuantas entradas hay de cada categoria en la tabla entradas.
SELECT COUNT(titulo) AS 'Numero de Entradas', categoria_id FROM entradas GROUP BY categoria_id;

# Consulta de agrupamiento con condiciones. SE USA HAVING como si fuese el where.
# Mostrar cuantas entradas hay de cada categoria en la tabla entradas. que tengan 4 o más entras.
SELECT COUNT(titulo) AS 'Numero de Entradas', categoria_id 
FROM entradas GROUP BY categoria_id
HAVING COUNT(titulo)>=4;

# Mostrar cuantas entradas hay de cada categoria en la tabla entradas. que tengan 3 o más entras.
SELECT COUNT(titulo) AS 'Numero de Entradas', categoria_id 
FROM entradas GROUP BY categoria_id
HAVING COUNT(titulo)>=3;

# FUNCIONES DE AGRUPAMIENTO

# Sacar una media de los ID entradas
SELECT AVG(id) AS 'Media de Entradas' FROM entradas;

# Sacar el máximo ide y el tilulo de la tabla entradas
SELECT MAX(id) AS 'Máximo ID', titulo FROM entradas;

# Sacar el mínimo ide y el tilulo de la tabla entradas
SELECT MIN(id) AS 'Mínimo ID', titulo FROM entradas;

# Sacar el mínimo ide y el tilulo de la tabla entradas
SELECT SUM(id) AS 'SUMA TOTAL ID' FROM entradas;