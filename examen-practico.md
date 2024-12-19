# Examen 2º DAM

## Instrucciones

En este examen se evaluará la capacidad del alumno para construir, lanzar y gestionar contenedores Docker. Para ello, se le pedirá que realice una serie de tareas que deberá entregar en un repositorio de GitHub.

El examen tiene diferentes metas, marca cada meta con un commit en tu repositorio. Cada commit debe tener un mensaje descriptivo de la tarea realizada.

Metas:

1. Crear un proyecto usando Docker que lance un servidor web Apache con un "Hola Mundo" en HTML.
2. Sube la imagen a `Docker Hub` y añade el comando para lanzarlo en el propio `Dockerfile` como un comentario.
3. Crea otro proyecto copia del anterior.
4. Modificalo para usar `docker compose` y lanzar dos contenedores: uno con el servidor web y otro con un servidor de base de datos MySQL, el servidor MySQL debe tener una base de datos creada con varios usuarios y contraseñas, y el servidor web debe poder acceder a la base de datos y mostrar los datos mediante `.php`.
5. [EXTRA] Haz un CRUD, necesitamos endpoints básicos para interactuar con la base de datos y sus tablas.