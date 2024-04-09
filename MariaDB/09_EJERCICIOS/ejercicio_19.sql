/**
 * Author:  Ricardo Sandoval Pérez
 * Created: 9 abr 2024
 */

# EJERCICIO 19
# Mostrar los vendedores con 2 o más clientes

SELECT * FROM vendedores WHERE id IN
    (SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2);

select * from clientes;