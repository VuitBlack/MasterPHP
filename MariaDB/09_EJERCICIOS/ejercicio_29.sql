/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 29
# Crear una vista llamada Vendedores_A que incluirá todos los vendedores
# del grupo que se llame "Vendedores A".

CREATE VIEW Vendedores_A AS
    SELECT * FROM vendedores WHERE grupo_id IN
        (SELECT id FROM grupos WHERE nombre='Vendedores A')

SHOW TABLES;

SELECT * FROM Vendedores_A;