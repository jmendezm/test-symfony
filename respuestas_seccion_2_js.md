# Respuestas al test

## Sección 2: JavaScript

1. **Pregunta Teórica:**
- Explica la diferencia entre var, let y const en JavaScript.

    **Respuesta**

    > *var* permite crear variables en el ambito de la función en la que se encuentra y ademas permite redeclarar las variables. *let* crea las variables en el ambito del bloque (if, switch, etc..) y no permite redeclararlas. *const* al igual que let declara en el ambito del bloque, no permite redeclarar y una vez asignado el valor no se puede reasignar otro

2. **Pregunta de Código:**
- Escribe una función en JavaScript que invierta una cadena de texto.

    **Respuesta**

    ```javascript
    function Reverse(text) {
        let text_reversed = "";
        for(i = text.length-1; i >= 0; i--) {
            text_reversed += text[i];
        }
        return text_reversed;
    }

    let a = "texto de prueba";
    console.log(`${a} reversed is: ${Reverse(a)}`);
    ```

3. **Pregunta Teórica:**
- ¿Qué es el Event Loop en JavaScript y cómo funciona?

    **Respuesta**

    > El EventLoop (EvL) es el que maneja la ejecución del código en Javascript. Cada instrucción del código se pone en una cola y el EvL va cogiendo de esa cola y poniendo en una pila de ejecución las funciones y ejecutando hasta que no quede ninguna en la pila, y continua con la siguiente instrucción de la cola.

4. **Pregunta de Código:**
- Escribe un script en JavaScript que filtre los números pares de un array de números y los muestre en la consola.

    **Respuesta**

    ```javascript
    function FilterEvenNumbers(array) {
        let evens = [];
        for(i = 0; i < array.length; i++) {
            if(array[i] % 2 === 0) {
                evens.push(array[i]);
            }
        }
        return evens;
    }
    console.log(FilterEvenNumbers([1,2,3,4,5,6,7,8,9,0,10,11,12,13]));
    ```

5. **Pregunta Teórica:**
- ¿Qué es el DOM y cómo se manipula usando JavaScript?

    **Respuesta**

    > El DOM es la estructura que tiene un documento HTML, su representación es un árbol de elementos. Se manipula mediante el objeto *document* que contiene funciones para obtener, eliminar, adicionar o modificar cualquier elemento dentro del árbol. También se puede manipular con librerias como por ejemplo jQuery.

6. **Pregunta de Código:**
- Escribe un código en JavaScript que añada un event listener a un botón con el id #myButton para mostrar una alerta con el mensaje "Hello World" al hacer clic.

    **Respuesta**
    > La respuesta también se puede ver en el archivo **test.html**
    ```html
        <button type="button" id="myButton">ClickMe</button>
        <script>
            document.getElementById("myButton").addEventListener('click',
                () => {
                    alert('Hello World');
                }
            )
        </script>
    ```

7. **Pregunta Teórica:**
- Explica qué es una Promesa en JavaScript y proporciona un ejemplo básico.

    **Respuesta**
    
    > Las promesas en javascript son la forma de ejecutar código asíncrono, o sea que no bloquee la ejecución del código principal. Un ejemplo de esto son las llamadas a APIs, que pueden demorar en dar una respuesta
    
    **Ejemplo**

    ```javascript
    function AsyncCode() {
        console.log("start");

        let promise = new Promise((resolved, reject) => {
            // simulate API call

            // if change to true, the primse will fail executing catch()
            let failResponse = false;
            
            setTimeout( () => {
                if(failResponse) {
                    reject('Error executing promise');
                }
                resolved('Promised executed OK');
            }, 3000);
        });
        promise.then((m) => {
            console.log(`OK: ${m}`);
        }).catch( (m) => {
            console.log(`FAIL: ${m}`)
        });
        console.log("end");
    }
    AsyncCode();
    ```

8. **Pregunta de Código:**
- Escribe una función en JavaScript que haga una petición AJAX (usando fetch) para obtener datos de una API y los muestre en un elemento con el id #result.

    **Respuesta**

    ```html
    <body>
        <hr>
        <h4>Get data from PokeAPI</h4>
        <button onclick="GetPokemonData()">Get data</button>
        <div id="result"></div>
        <script>
            function GetPokemonData() {
                let url = "https://pokeapi.co/api/v2/pokemon/ditto";
                let resultEl = document.getElementById("result");
                const response = fetch(url);
                response.then((result) => {
                    result.json().
                        then((data) => {
                            console.log(data);
                            let dataString = JSON.stringify(data);
                            resultEl.innerHTML = dataString;
                        }).
                        catch((e) => {
                            let errEl = `<span style="color: red;">Error fetching data from service: ${e}</span>`
                            resultEl.innerHTML = errEl;
                        });
                    
                }).catch((e) => {
                    let errEl = `<span style="color: red;">Error fetching data from service: ${e}</span>`
                    resultEl.innerHTML = errEl;
                });
            }
        </script>
    </body>
    </html>
    ```

9. **Pregunta Teórica:**
- ¿Cuál es la diferencia entre null, undefined y NaN en JavaScript?

    **Respuesta**

    > *NaN* es Not a Number, y se usa para saber si el contenido de una variable es un número, ya que javascript no es tipado y por lo tanto las variables pueden contener valores de cualquier tipo. *undefined* son variables que están declaradas pero que no tienen valor asignado

10. **Pregunta de Código:**
- Implementa una función en JavaScript que use localStorage para guardar una clave-valor y luego recuperarla.

    **Respuesta**

    ```html
    <hr>
    <h5>Data on storage</h5>
    <button id="getData" onclick="GetData()">Get</button>
    <button id="setData" onclick="SaveData()">Save</button>
    <button id="deleteData" onclick="DeleteData()">Delete</button>
    <script>
        function SaveData() {
            localStorage.setItem("name", "Jesus");
            localStorage.setItem("token", "whefgwehfewhegbfrkweh");
            console.log("data saved to local storage"); 
        }
        function GetData() {
            let name = localStorage.getItem("name");
            let token = localStorage.getItem("token");
            if(name && name != null && token && token != null) {
                console.log(`User ${name} with token ${token}`);
            } else {
                console.log("data not found on storage");
            }
        }
        function DeleteData() {
            localStorage.removeItem("name");
            localStorage.removeItem("token");
            console.log("data deleted from storage");
        }
    </script>
    ```