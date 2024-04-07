/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 6 abr 2024
 */

# DISEÑO Y CREACIÓN DE LA BASE DE DATOS DE UN CONCESIONARIO

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches (
    id      int(10) AUTO_INCREMENT NOT NULL,
    modelo  varchar(32) NOT NULL,
    marca   varchar(32),
    precio  int(20) NOT NULL,
    stock   int(255) NOT NULL,
    CONSTRAINT PK_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos (
    id      int(10) AUTO_INCREMENT NOT NULL,
    nombre  varchar(64) NOT NULL,
    ciudad  varchar(32),
    CONSTRAINT PK_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE vendedores (
    id          int(10) AUTO_INCREMENT NOT NULL,
    grupo_id    int(10) NOT NULL,
    jefe        int(10),
    nombre      varchar(32) NOT NULL,
    apellidos   varchar(64),
    cargo       varchar(32),
    fecha       date,
    sueldo      float(20,2),
    comision    float(10,2),
    CONSTRAINT PK_vendedores PRIMARY KEY(id),
    CONSTRAINT FK_vendedor_grupos FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT FK_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes (

    id              int(10) AUTO_INCREMENT NOT NULL,
    vendedor_id     int(10),
    nombre          varchar(64) NOT NULL,
    ciudad          varchar(32) NOT NULL,
    gastado         float(50,2),
    fecha           date,
    CONSTRAINT PK_clientes PRIMARY KEY(id),
    CONSTRAINT FK_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos (
    id              int(10) AUTO_INCREMENT NOT NULL,
    cliente_id      int(10) NOT NULL,
    coche_id        int(10) NOT NULL,
    cantidad        int(100),
    fecha           date,
    CONSTRAINT PK_encargos PRIMARY KEY(id),
    CONSTRAINT FK_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT FK_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

SHOW TABLES;

# RELLENAR INFORMACIÓN EN LA BBDD - INSERTS #


# COCHES (id, modelo, marca, precio, stock)
INSERT INTO coches VALUES
    (NULL, 'Clio', 'Renault',12000,13),
    (NULL, 'Panda', 'Seat',10000,10),
    (NULL, 'Ranchera', 'Mercedes Benz',32000,24),
    (NULL, 'Cayene', 'Porche',65000,5),
    (NULL, 'Aventador', 'Lamborgini',170000,2),
    (NULL, 'Spider', 'Ferrari',245000,80);

SELECT * FROM coches;

# GRUPOS (id, nombre, ciudad)
INSERT INTO grupos VALUES
    (NULL, 'Vendedores A', 'Madrid'),
    (NULL, 'Vendedores B', 'Madrid'),
    (NULL, 'Directores Mecánicos', 'Madrid'),
    (NULL, 'Vendedores A', 'Barcelona'),
    (NULL, 'Vendedores B', 'Barcelona'),
    (NULL, 'Vendedores C', 'Valencia'),
    (NULL, 'Vendedores A', 'Bilbao'),
    (NULL, 'Vendedores B', 'Pamplona'),
    (NULL, 'Vendedores C', 'Santiago de Compostela');

SELECT * FROM grupos;

# VENDEDORES (id, grupo_id, jefe, nombre, apellidos, cargo, fecha, suelda, comision)
INSERT INTO vendedores VALUES
    (NULL, 1, NULL, 'David','López', 'Responsable Tienda', CURDATE(), 30000, 4),
    (NULL, 1, 1, 'Fran','Martinez', 'Ayudante Tienda', CURDATE(), 23000,2),
    (NULL, 2, NULL, 'Nelson','Sanchez', 'Responsable Tienda', CURDATE(), 38000, 5),
    (NULL, 2, 3, 'Jesús','López', 'Ayudante Tienda', CURDATE(), 12000, 6),
    (NULL, 3, NULL, 'Victor','Lopez', 'Mecánico Jefe', CURDATE(), 50000, 2),
    (NULL, 4, NULL, 'Antonio','Lopez', 'Vendedor Recambios', CURDATE(), 13000, 8),
    (NULL, 5, NULL, 'Salvador','Lopez', 'Vendedor Experto', CURDATE(), 60000, 2),
    (NULL, 6, NULL, 'Joaquín','Lopez', 'Ejecutivo de Cuentas', CURDATE(), 80000, 1),
    (NULL, 6, NULL, 'Luis','Lopez', 'Ayudante Tienda', CURDATE(), 10000, 10);

SELECT * FROM vendedores;

# CLIENTES (id, vendedor_id, nombre, ciudad, gastado, fecha)
INSERT INTO clientes VALUES
    (NULL, 1, 'Construcciones Días Inc', 'Alcobendas', 24000, CURDATE()),
    (NULL, 1, 'Fruteria Antonia Inc', 'Fuenlabrada', 40000, CURDATE()),
    (NULL, 1, 'Imprenta Martínez Inc', 'Barcelona', 32000, CURDATE()),
    (NULL, 1, 'Jesús Colchones Inc', 'El Prat', 96000, CURDATE()),
    (NULL, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE()),
    (NULL, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());


SELECT * FROM clientes;
# truncate table clientes;

# ENCARGOS (id, cliente_id, coche_id, cantidad,fecha)
INSERT INTO encargos VALUES
    (NULL, 1, 1, 2, CURDATE()),
    (NULL, 2, 2, 4, CURDATE()),
    (NULL, 3, 3, 1, CURDATE()),
    (NULL, 4, 3, 3, CURDATE()),
    (NULL, 5, 5, 1, CURDATE()),
    (NULL, 6, 6, 1, CURDATE());
    
SELECT * FROM encargos;
# truncate table encargos;

# CONSULTA MULTITABLA PARA SABER CUANTOS VEHICULOS HA COMPRADO CADA CLIENTE Y MOSTRAR MARCA Y MODELO
SELECT cantidad, nombre, CONCAT_WS(' ',marca, modelo) as 'Marca y Modelo' FROM encargos, clientes, coches 
WHERE encargos.cliente_id=clientes.id AND encargos.coche_id=coches.id;