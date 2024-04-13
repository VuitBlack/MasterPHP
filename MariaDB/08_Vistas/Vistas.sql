/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 5 abr 2024
 */

# VISTAS

CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo AS 'Titulo de la Entrada', u.nombre AS 'Autor', c.nombre AS 'Nombre Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id=u.id
INNER JOIN categorias c ON e.categoria_id=c.id
ORDER BY e.id;

# Para ver la VISTA creada mostramos las tablas se almacenan ahí
SHOW TABLES;

# Para ver el contendio de la VISTA lo hacemos igual que para una tabla 
SELECT * FROM entradas_con_nombres;

# Para eliminar la VISTA lo hacemos con DROP 
DROP VIEW entradas_con_nombres;

