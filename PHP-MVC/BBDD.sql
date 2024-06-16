/**
 * Author:  Ricardo Sandoval
 * Created: 2 abr 2024
 */
CREATE DATABASE notas_mvc;
use notas_mvc;
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

CREATE TABLE notas(
    id int(255) auto_increment not null,
    usuario_id int(255) not null,
    titulo varchar(64) not null,
    descripcion MEDIUMTEXT,
    fecha date not null,
    CONSTRAINT PK_entradas PRIMARY KEY(id),
    CONSTRAINT FK_entradas_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id)  
)ENGINE=InnoDB;
