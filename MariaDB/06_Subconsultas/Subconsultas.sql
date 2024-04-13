/*
 * Author:  Ricardo Sandoval Pérez
 * Created: 4 abr 2024
 *
 *
 * SUBCONSULTAS 
 *      - Consultas que se ejecutan dentro de otras.
 *      - Usa los resultados de la consulta para operar en la consulta principal.
*/

# Insertamos un nuevo usario en la tabla usuarios.
INSERT INTO usuarios VALUES(null, 'Admin', 'Admin', 'admin@admin.com', 'admin', CURDATE());
INSERT INTO entradas VALUES(null, 3, 1, 'Guía de GTA Vice City', 'GTA', CURDATE());
INSERT INTO entradas VALUES(null, 1, 1, 'Jugando con SQL', 'SQL', CURDATE());
INSERT INTO categorias VALUES(null, 'Plataformas');

# Visualizamos toda la tabla usuarios
SELECT * FROM usuarios;

# Mostrar todos los usuarios que tengan al menos una entrada en la tabla entradas.
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

# Mostar todos los usuarios que NO tengan entradas en la tabla entradas.
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

# Mostrar a los usuarios que en alguna entrada hablen de GTA.
SELECT nombre, apellidos FROM usuarios WHERE id IN
    (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

# Mostrar todas las entradas de la categoría acción usando su nombre.
SELECT categoria_id, titulo FROM entradas WHERE categoria_id IN
    (SELECT id FROM categorias WHERE nombre='Acción');

# Mostrar las categorias con 3 o más entradas.
SELECT nombre FROM categorias WHERE id IN
    (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);

# Mostrar los usuarios que crearon una entrada un martes. "Los días de la semana empiezan en domingo=1".
SELECT nombre, apellidos FROM usuarios WHERE id IN
    (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=6);

# Mostrar el nombre del usuario con más entradas.
SELECT nombre, apellidos FROM usuarios WHERE id =
    (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostrar las categorías sin entradas.
SELECT * FROM categorias WHERE id NOT IN
    (SELECT categoria_id FROM entradas);

