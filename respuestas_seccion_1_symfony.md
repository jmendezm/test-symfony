# Respuestas al test

## Sección 1: Symfony

1. **Pregunta de Configuración:**
- Describe los pasos básicos para levantar un proyecto en Symfony.

    **Respuesta**:
    > Quedó descrito en el Readme.md del proyecto


2. **Pregunta de Código:**
- Crea un controlador en Symfony que maneje una ruta /hello/{name} y devuelva un saludo personalizado. Además, si el nombre no se proporciona, debe devolver un saludo predeterminado "Hello World". (opcional) Implementa también una prueba unitaria para verificar que la ruta devuelve el saludo correcto.

    **Respuesta**
    > El controller está en ./src/Controller/GreetingController.php

3. **Pregunta Teórica:**
- Explica la arquitectura de Symfony y cómo se organiza un proyecto típico en términos de carpetas y archivos.

    **Respuesta**
    > La arquitectura de Symfony se guia por el patrón MVC, teniendo la lógica de la aplicacion separada de las vistas y de los datos. Las peticiones las manejan los *Controllers*. Estos pueden manejar la logica del negocio y mandar a construir las vistas con los datos que vienen de la BD, aunque tambien se usan *Services* para manejar la lógica de negocio permitiendo que esta esté desacoplada de los *Controllers*. Estos *Services* se pueden inyectar directamente en los *Controllers* usando el autowire que provee Symfony. Este autowire se puede hacer tambien mediante archivos yaml de configuración que se encuentran en el directorio */config/*. Mediante estos ficheros también se puede configurar las rutas. Dentro del directorio *src* se ubica el codigo fuente PHP de la app, en la carpeta *templates* se encuentran las plantillas que usa el motor *twig* para generar las vistas html. El directorio *vendor* contiene las dependencias que se pueden instalar mediante el comando *composer require <dep_name>* que a su vez se encuentran listadas en el archivo composer.json.

4. **Pregunta de Código:**
- Escribe un servicio en Symfony que se inyecta en un controlador y realiza una operación matemática básica (por ejemplo, sumar dos números). ¿Qué configuraciones son necesarias para poder usarlo? (opcional) Implementa también una prueba unitaria para verificar el correcto funcionamiento del servicio.

    **Respuesta**
    > El servicio se encuentra en *./src/Services/CalculatorService.php*
    
    > Para utilizarlo se declara un objeto de tipo CalculatorService como parametro de la funcion sum() en el controller CalculatorController.php. El autowiring de symfony detecta eso y automatico crea un objeto de ese tipo y se lo provee al controlador. Por defecto ya viene configurado para que el autowiring se haga en cualquier lugar dentro del directorio *./src/* que se necesite (con sus exepciones). En caso de querer cambiar esta config se puede hacer en el fichero *./config/services.yml*

5. **Pregunta de Código:**
- Muestra cómo crear un formulario en Symfony para una entidad User con campos username y email.

    **Respuesta**
    > En el fichero *./src/Form/User.php* se encuentra la definición del formulario y se usa en el controlador *./src/Controller/UserController.php*

6. **Pregunta Teórica:**
- Explica el concepto de Dependency Injection (DI) en Symfony y cómo se configura.

    **Respuesta**
    > La inyección de dependencia en Symfony permite que con solo declarar el uso de una clase como parametro en una funcion el propio framework se encargue eficientemente de crear un objeto de esta clase solicitada y proveerlo a la funcion que lo solicite (autowiring). Generalmente se usa para proveer a los controladores de servicios. Esto evita al desarrollador estar creando los objetos manualmente y pasandolo al que lo necesite, agilizando desarrollo y evitando errores. Todo esto es configurable mediante el fichero *./config/services.yml*

7. **Pregunta de Código:**
- Escribe una consulta Doctrine en Symfony para obtener todos los registros de una entidad Product donde el precio sea mayor a 100.

    **Respuesta**
    > Cree la entidad Product en *./src/Entity/Product.php* mediante el comando de doctrine, esto generó el repositorio *./src/Repository/ProductRepository.php* y en este último cree la consulta.

8. **Pregunta Teórica:**
- ¿Qué es el Event Dispatcher en Symfony y para qué se utiliza?

9. **Pregunta de Código:**
- Crea un validador personalizado en Symfony para asegurar que el campo email de una entidad User no pertenece a un dominio específico (por ejemplo, "example.com"). Muestra cómo configurar este validador y cómo sería utilizado en la entidad User.

10. **Pregunta de Código:**
- Implementa un Event Subscriber en Symfony que escuche el evento kernel.request y registre en un archivo de log cada visita a cualquier página de la aplicación. Asegúrate de configurar el servicio correctamente para que el suscriptor se registre con el evento.
