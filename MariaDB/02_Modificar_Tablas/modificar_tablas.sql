# MODIFICAR TABLAS

    # RENOMBRAR UNA TABLA
alter table usuarios RENAME TO usuarios_renombrada;

    # RENOMBRAR UNA COLUMNA
alter table usuarios_renombrada CHANGE apellidos apellido varchar(64) null;

    # MODIFIAR UNA COLUMNA SIN CAMBIAR EL NOMBRE
alter table usuarios_renombrada MODIFY apellido char(50) not null;

    # AÑADIR UNA NUEVA COLUMNA A UNA TABLA
alter table usuarios_renombrada ADD website varchar(50) null;

    # AÑADIR UNA RESTRICCIÓN A UNA COLUMNA.
alter table usuarios_renombrada ADD CONSTRAINT uq_email UNIQUE(email);

    # BORRAR UNA COLUMNA DE UNA TABLA
alter table usuarios_renombrada DROP website;