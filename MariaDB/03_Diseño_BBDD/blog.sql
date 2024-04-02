/**
 * Author:  Ricardo Sandoval
 * Created: 2 abr 2024
 */

CREATE TABLE usuarios(
    id int(255) auto_increment not null,
    nombre varchar(20) not null,
    apellidos varchar(32) not null,
    email varchar(32) not null,
    password varchar(16) not null,
    fecha date not null,
    CONSTRAINT PK_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB;


CREATE TABLE categorias(
    id int(255) auto_increment not null,
    nombre varchar(20) not null,
    CONSTRAINT PK_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE entradas(
    id int(255) auto_increment not null,
    usuario_id int(255) not null,
    categoria_id int(255) not null,
    titulo varchar(64) not null,
    descripción MEDIUMTEXT,
    fecha date not null,
    CONSTRAINT PK_entradas PRIMARY KEY(id),
    CONSTRAINT FK_entradas_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT FK_entradas_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE CASCADE,  
)ENGINE=InnoDB;




