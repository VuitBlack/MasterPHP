/**
 * Author:  ricardo
 * Created: 3 abr 2024
 */

# INSERTS CATEGORIAS

INSERT INTO categorias VALUES(null, 'Acción');
INSERT INTO categorias VALUES(null, 'Rol');
INSERT INTO categorias VALUES(null, 'Deportes');

# INSERTS ENTRADAS

INSERT INTO entradas VALUES(null, 1, 1, 'Novedades de GTA-5 online', 'Review de GTA-5', CURDATE());
INSERT INTO entradas VALUES(null, 1, 2, 'Review de LoL online', 'Todo sobre League of Legends', CURDATE());
INSERT INTO entradas VALUES(null, 1, 3, 'Nuevos players de FIFA 19', 'Review de Fifa 19', CURDATE());

INSERT INTO entradas VALUES(null, 2, 1, 'Novedades de Assasins online', 'Review de Assasins', CURDATE());
INSERT INTO entradas VALUES(null, 2, 2, 'Review de Wow online', 'Todo sobre Worl of Wordcraft', CURDATE());
INSERT INTO entradas VALUES(null, 2, 3, 'Nuevos players de PES 19', 'Review de PES 19', CURDATE());

INSERT INTO entradas VALUES(null, 3, 1, 'Novedades de Call of Duty online', 'Review de COD', CURDATE());
INSERT INTO entradas VALUES(null, 3, 1, 'Review de Fortnite online', 'Todo sobre Fornite', CURDATE());
INSERT INTO entradas VALUES(null, 3, 3, 'Nuevos players de Formula 1 2k20', 'Review del Forumua 1 2k20', CURDATE());
