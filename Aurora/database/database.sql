CREATE DATABASE IF NOT EXISTS Aurora;
USE Aurora;

CREATE TABLE IF NOT EXISTS users (
    id BIGINT UNSIGNED AUTO_INCREMENT,
    role ENUM('user', 'admin') NOT NULL DEFAULT 'user',
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    nick VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    remember_token VARCHAR(100) DEFAULT NULL,
    CONSTRAINT pk_users PRIMARY KEY (id)
)ENGINE=InnoDB;

insert into users (id, role, name, surname, nick, email, password, image, created_at, updated_at, remember_token) values
(NULL, 'admin', 'Admin', 'Admin', 'Admin', 'admin@gmail.com', '1234', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL),
(NULL, 'user', 'Tony', 'Stark', 'Ironman', 'ironman@gmail.com', '1234', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL),
(NULL, 'user', 'Steve', 'Rogers', 'CaptainAmerica', 'captainamerica@gmail.com', '1234', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL);

CREATE TABLE IF NOT EXISTS images(
    id BIGINT UNSIGNED AUTO_INCREMENT,
    user_id BIGINT UNSIGNED NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    description TEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT pk_images PRIMARY KEY (id),
    CONSTRAINT fk_images_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)ENGINE=InnoDB;

insert into images (id, user_id, image_path, description, created_at, updated_at) values
(NULL, 1, 'images/admin.jpg', 'Admin profile picture', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 2, 'images/ironman.jpg', 'Ironman in action', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 3, 'images/captainamerica.jpg', 'Captain America ready for battle', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


CREATE TABLE IF NOT EXISTS comments (
    id BIGINT UNSIGNED AUTO_INCREMENT,
    user_id BIGINT UNSIGNED NOT NULL,
    image_id BIGINT UNSIGNED NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT pk_comments PRIMARY KEY (id),
    CONSTRAINT fk_comments_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_comments_images FOREIGN KEY (image_id) REFERENCES images(id) ON DELETE CASCADE
)ENGINE=InnoDB;

insert into comments (id, user_id, image_id, content, created_at, updated_at) values
(NULL, 2, 1, 'Preciosa foto de perfil!', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 3, 2, 'Me encanta esta imagen de Ironman!', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 1, 3, 'Captain America estas increible!', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

CREATE TABLE IF NOT EXISTS likes (
    id BIGINT UNSIGNED AUTO_INCREMENT,
    user_id BIGINT UNSIGNED NOT NULL,
    image_id BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT pk_likes PRIMARY KEY (id),
    CONSTRAINT fk_likes_users FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_likes_images FOREIGN KEY (image_id) REFERENCES images(id) ON DELETE CASCADE,
    CONSTRAINT uq_like UNIQUE (user_id, image_id)
)ENGINE=InnoDB; 

insert into likes (id, user_id, image_id, created_at, updated_at) values
(NULL, 2, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 3, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 1, 3, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 2, 3, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
(NULL, 3, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP), 
(NULL, 1, 2, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


CREATE TABLE IF NOT EXISTS follows (
    id BIGINT UNSIGNED AUTO_INCREMENT,
    follower_id BIGINT UNSIGNED NOT NULL,    -- El usuario que hace clic en "Seguir"
    followed_id BIGINT UNSIGNED NOT NULL,    -- El usuario que recibe el "Follow"
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    CONSTRAINT pk_follows PRIMARY KEY (id),
    
    -- Claves foráneas: ambas apuntan a la tabla de usuarios
    CONSTRAINT fk_follower FOREIGN KEY (follower_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_followed FOREIGN KEY (followed_id) REFERENCES users(id) ON DELETE CASCADE,
    
    -- Evitar que un usuario siga a la misma persona más de una vez
    CONSTRAINT uq_follow UNIQUE (follower_id, followed_id),
    
    -- Evitar que un usuario se siga a sí mismo (opcional pero recomendado)
    CONSTRAINT chk_no_self_follow CHECK (follower_id != followed_id)
) ENGINE=InnoDB;

