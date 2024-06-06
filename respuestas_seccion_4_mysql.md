# Respuestas al test

## Sección 4: MySQL

1. **Pregunta de Código:**
- Escribe una consulta SQL para crear una base de datos llamada company y una tabla llamada employees con las siguientes columnas: id (INT, auto-increment, primary key), name (VARCHAR(100)), position (VARCHAR(50)), salary (DECIMAL(10, 2)), y hire_date (DATE).

    **Respuesta**
    ```sql
    create schema company;

    create table if not exists company.employees (
        id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        name VARCHAR(100), 
        position VARCHAR(50),
        salary DECIMAL(10, 2),
        hire_date DATE
    );
    ```

2. **Pregunta Teórica:**
- Explica la diferencia entre una clave primaria (Primary Key) y una clave foránea (Foreign Key) en MySQL. ¿Cuándo y por qué se utilizan?

    **Respuesta**
    > La clave primaria es el dato principal que identifica un registro en una tabla, es recomendable que cada tabla la tenga, este campo no puede ser nulo y además es único.
    > La llave foránea es el campo en el cual en una tabla se referencia a un registro de otra tabla (relaciones entre tablas).

3. **Pregunta de Código:**
- Escribe una consulta SQL para insertar tres registros en la tabla employees creada en la pregunta 2.

    **Respuesta**
    ```sql
    insert into company.employees(name, position, salary, hire_date)
    values('Pepe', 'comercial', '4950.00', '2024-06-06'),
          ('Ramon', 'servicios', '3000.00', '2024-01-01'),
          ('Jose', 'jefe comercial', '6000.00', '2021-07-06');
    ```

4. **Pregunta de Código:**
- Muestra cómo actualizar el salario de un empleado específico en la tabla employees. Por ejemplo, actualiza el salario del empleado con id = 1 a 60000.00.

    **Respuesta**

    ```sql
    update company.employees set salary = 6000.00 where id = 1;
    ```

5. **Pregunta de Código:**
- Escribe una consulta SQL para seleccionar todos los empleados cuyo salario sea mayor a 50000.00 y ordenarlos por el campo hire_date en orden descendente.

    **Respuesta**

    ```sql
    select * from company.employees where salary > 50000.00 order by hire_date desc;
    ```

6. **Pregunta Teórica:**
- ¿Qué es una transacción en MySQL y cómo se utiliza? Proporciona un ejemplo de uso.

    **Respuesta**

    > Una transacción es un bloque sql que puede contener uno o varias consultas o cambios en la BD, que garantiza que se ejecuten todos los cambios o ninguno asegurando la integridad de los datos. Si algo falla durante la transacción todos los cambios se revierten. Un ejemplo de uso sería cuando se va a hacer una transferencia bancaria de una cuenta a la otra, haciendo las operaciones dentro de una transacción se verifica que la cuenta de la cual se transfiere tenga dinero, que la otra cuenta existe y no esta deshabilitada, se le resta el dinero a una cuenta y se le suma a la otra, todo esto garantizando que se ejecuten todas las operaciones y que si algo falla todos los datos se mantien sin cambios, sin dejar inconsistencia en ellos

7. **Pregunta de Código:**
- Crea una vista en MySQL llamada high_earning_employees que seleccione todas las columnas de los empleados cuyo salario sea mayor a 70000.00.

    **Respuesta**

    ```sql
    create view high_earning_employees as
    select * from company.employees where salary > 70000.00;
    ```