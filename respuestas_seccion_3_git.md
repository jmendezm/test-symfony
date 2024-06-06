# Respuestas al test

## Sección 3: Git

1. **Pregunta Teórica:**
- ¿Qué es Git y para qué se utiliza en el desarrollo de software?

    **Respuesta**

    > Git es un software para control de versiones. Se usa en el desarrollo de software para gestionar el código fuente, controlar distinas versiones que pueda tener este manteniendo todos los cambios que sufre en el tiempo y además con la posibilidad de revertir a cualquier momento del código.

2. **Pregunta de Comandos:**
- ¿Cuál es el comando para clonar un repositorio de Git?

    **Respuesta**

    ```bash
    git clone <Code_Repo_URL>
    ```

    > Ejemplo para clonar este repo el comando sería
    ```bash
    git clone https://github.com/jmendezm/test-symfony
    ```

3. **Pregunta Teórica:**
- Explica qué es un "branch" (rama) en Git y para qué se utiliza.

    **Respuesta**
    
    > Una rama es una bifuración del repositorio que puede sufrir cambios sin afectar el repositorio original o la rama principal, es un camino distinto que se va tomando sin afectar lo demás que después se puede eliminar o unir a otras ramas, incluso gestionar permisos de usuario individuales por cada rama

4. **Pregunta de Comandos:**
- Proporciona los comandos necesarios para crear una nueva rama llamada feature-xyz, cambiar a esa rama, y luego fusionarla con la rama main.

    **Respuesta**

    - Crear rama
    ```bash
    git branch feature-xyz
    ```
    - Cambiar a la rama
    ```bash
    git checkout feature-xyz
    ```
    - Crear rama nueva y cambiar a esta en 1 solo comando
    ```bash
    git checkout -b feature-xyz
    ```
    - Para fusionar con la rama main primero guardamos los cambios con commit, cambiamos a la rama main y ejecutamos el merge
    ```bash
    git commit -m "mensaje"
    git checkout main
    git merge feature-xyz

    ```

5. **Pregunta Teórica:**
- ¿Qué es un "merge conflict" y cómo se resuelve?

    **Respuesta**

    > Los merge conflict se da cuando hay 2 cambios distintos en la misma linea del fichero y se resuelve aceptando uno de los cambios o ambos llegando a un acuerdo creando un commit nuevo

6. **Pregunta de Comandos:**
- ¿Cuál es el comando para visualizar el estado actual del repositorio en Git?

    **Respuesta**
    ```bash
    git status
    ```

7. **Pregunta Teórica:**
- Explica la diferencia entre git pull y git fetch.

    **Respuesta**

    > *fetch* solo obtiene los metadatos de los cambios (ejemplo ramas nuevas), mientras que *pull* obtiene todos los cambios inlcuidos los ficheros

8. **Pregunta de Comandos:**
- ¿Cuál es el comando para revertir el último commit en Git?

    **Respuesta**

    - Para revertir si ya los cambios estan subidos, esto creara un nuevo commit
    ```bash
    git revert <commit_name>
    ```

    - Para revertir local manteniendo cambios
    ```bash
    git reset --soft HEAD~1
    ```

9. **Pregunta Teórica:**
- ¿Qué es un "remote repository" y cómo se configura en Git?

    **Respuesta**

    > Remote repository es un servidor donde tienes copia del repositorio local y que puedes subir los cambios a este, ejemplo github o gitlab
    
    - Para configurarlo ejecutamos el siguiente comando
    ```bash
    git remote add <url_repo_remoto>
    ```
    - Ejemplo
    ```
    git remote add https://github.com/jmendezm/test-symfony
    ```

10. **Pregunta de Comandos:**
- Proporciona los comandos para añadir todos los cambios en los archivos al staging area y luego realizar un commit con el mensaje "Initial commit".

    **Respuesta**

    ```bash
    git add .
    git commit -m "Initial commit"
    ```