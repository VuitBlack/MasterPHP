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

# Visualizamos toda la tabla usuarios
SELECT * FROM usuarios;

# Mostrar todos los usuarios que tengan al menos una entrada en la tabla entradas.
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

# Mostar todos los usuarios que NO tengan entradas en la tabla entradas.
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);