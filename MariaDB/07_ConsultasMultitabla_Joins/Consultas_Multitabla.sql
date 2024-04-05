/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 5 abr 2024
 */

# Mostrar las entradas con el nombre del autor y el nombre de la categoría
SELECT e.id, e.titulo AS 'Titulo de la Entrada', u.nombre AS 'Autor', c.nombre AS 'Nombre Categoria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id=u.id AND e.categoria_id=c.id
ORDER BY e.id;

# Misma consulta con INNER JOIN
SELECT e.id, e.titulo AS 'Titulo de la Entrada', u.nombre AS 'Autor', c.nombre AS 'Nombre Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id=u.id
INNER JOIN categorias c ON e.categoria_id=c.id
ORDER BY e.id;


# Mostrar el nombre de las categorias y cuantas entradas tienen.
SELECT c.nombre AS 'Nombre de Categoria', COUNT(e.id) AS 'Numero de entradas'
FROM categorias c, entradas e
WHERE c.id=e.categoria_id
GROUP BY e.categoria_id;

# Misma consulta con INNER JOIN --- FALTA LA CATEGORÍA PLATAFORMAS
SELECT c.nombre AS 'Nombre de Categoria', COUNT(e.id) AS 'Numero de entradas'
FROM categorias c
INNER JOIN entradas e ON c.id=e.categoria_id
GROUP BY e.categoria_id;

# Misma consulta con LEFT JOIN --- Muestra todos los registros de la tabla a la izquierda del  =
SELECT c.nombre AS 'Nombre de Categoria', COUNT(e.id) AS 'Numero de entradas'
FROM categorias c
LEFT JOIN entradas e ON e.categoria_id=c.id
GROUP BY e.categoria_id;

# Misma consulta con RIGTH JOIN --- Muestra todos los registros de la tabla a la derecha del  =
SELECT c.nombre AS 'Nombre de Categoria', COUNT(e.id) AS 'Numero de entradas'
FROM entradas e
LEFT JOIN categorias c ON e.categoria_id=c.id
GROUP BY e.categoria_id;

# Mostrar el email de los usuarios y cuants entradas tiene.
SELECT u.email AS 'Email de Usuario', COUNT(e.id) as 'Numero de entradas'
FROM usuarios u, entradas e
WHERE u.id=e.usuario_id
GROUP BY e.usuario_id;

# Misma consulta con INNER JOIN
SELECT u.email AS 'Email de Usuario', COUNT(e.id) as 'Numero de entradas'
FROM usuarios u
INNER JOIN entradas e ON u.id=e.usuario_id
GROUP BY e.usuario_id;

