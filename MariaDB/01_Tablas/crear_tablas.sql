/* 
 *     CREAR TABLAS
       tipos de datos de columnas:
            int(nº caracteres)              ENTERO
            integer (nº caracteres)         ENTERO
            varchar (nº caracteres max255)  STRING / ALFANUMERICO
            char (nº caracteres)            STRING / ALFANUMERICO
            float (nº cifras, nº decimales) DECIMAL / COMA FLOTANTE
            date (fecha)                    FECHAS
            time, timestamp                 HORAS
            
            TEXT (65535 caracteres)
            MEDIUMTEX (16 millones de caracteres)
            LONGTEXT  (4 billones caractecters)
 */
/**
 * Author:  Ricardo Sandoval
 * Created: 1 abr 2024
 */

CREATE TABLE usuarios(
    id int(11) auto_increment not null,
    nombre varchar(20) not null,
    apellidos varchar(64) default 'Pérez',
    email varchar(64) not null,
    password varchar(16),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

