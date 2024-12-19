# Servidor Apache + MySQL

Este examen pone a prueba tu capacidad de utilizar docker para iniciar entornos con los que no tienes familiaridad previa y tu capacidad de documentar tus pasos.

## Entorno

El entorno que debes crear se compone de:

- Servidor Web Apache
- Servidor de Base de Datos MySQL
- Varios archivos PHP que se sirvan desde el servidor web

Apache es un servidor web muy popular y extendido. Normalmente lo instalarias mediante `apt install apache2` y luego configurarías el servidor modificando a mano los archivos de configuración necesarios y luego gestionando el servicio con `systemctl`. En este caso, vamos a crear una imagen de docker que ya tenga todo eso configurado.

Apache es un servidor web muy interesante para vosotros, es **muy** diferente de Express, el servidor web que hemos estado utilizando hasta ahora. Os servirá para poder experimentar con **PHP** principalmente, pero también con otros lenguajes de programación en un backend.

## Dinámica

1. Crea un `fork` del repositorio.
2. Clona el repositorio en tu máquina. Este será el repositorio que utilizarás para entregar el examen.
3. Lee atentamente los sprints y realiza cada uno de ellos. Se preciso con lo que se te pide.
4. **Documenta** como has hecho cada uno de los sprints en el archivo `README.md`.

## Sprint 1: Preparación

1. Comprueba que puedes hacer `commit` y `push` a tu repositorio.
2. Comprueba que tienes la sesion en `docker hub` iniciada.
3. Documenta como has hecho estos pasos en el archivo `README.md`.

## Sprint 2: Apache

1. Crea una carpeta llamada `apache` y dentro de ella crea un archivo llamado `Dockerfile`.
2. Haz un servidor web Apache que sirva un archivo `index.html` que diga "Hola Mundo".
3. Construye la imagen y lánzala localmente.
4. Documenta como has hecho estos pasos en el archivo `README.md`.

## Sprint 3: Apache + PHP

1. Copia la carpeta `apache` y renómbrala a `apache-php`.
2. Haz que el servidor web Apache sirva un archivo `index.php` que muestre:
    - Un mensaje de hola mundo, como lo quieras hacer.
    - La fecha y hora actual.
    - La versión de PHP que estás utilizando.
    - La versión de Apache que estás utilizando.
    - La IP del servidor.
    - La IP del cliente.
3. Construye la imagen y lánzala localmente.
4. Documenta como has hecho estos pasos en el archivo `README.md`.

## Sprint 4: PHP

1. Seguiremos trabajando en `apache-php` en este sprint.
2. Crea un archivo `info.php` que muestre la información de PHP que se puede obtener mediante la función `phpinfo()`.
3. Crea un archivo `random.php` que devuelva un json en el que podamos acceder a:
    - Un número aleatorio entre 1 y 100.
    - Un mensaje que diga si el número es par o impar.
    - Un elemento aleatorio de un array que contenga al menos 5 elementos, a tu elección.
4. Construye la imagen y lánzala localmente.
5. Documenta como has hecho estos pasos en el archivo `README.md`.

## Sprint 5: Composing con Apache + PHP + MySQL

Este es el ultimo sprint. En este sprint vamos a crear un entorno completo con Apache, PHP y MySQL.

Apache y php ya los tenemos. Ahora vamos a añadir MySQL. Sin embargo, para esto tendrás que hacer uso de un comando nuevo, `docker compose` y un archivo de configuración, `docker-compose.yml` que te permitirá lanzar varios contenedores a la vez.

1. Crea una carpeta llamada `apache-php-mysql` y dentro de ella crea un archivo llamado `docker-compose.yml`.
2. Crea un archivo `init.sql` que contenga la creacion de una base de datos y una tabla de usuarios con los campos `id`, `name` y `password`.
3. Inserta varios usuarios dentro del `init.sql`.
4. Copia la carpeta `apache-php` de los sprints anteriores dentro del proyecto, de forma que se quede así:

```
apache-php-mysql
├── apache-php
│   ├── Dockerfile
│   ├── info.php
│   ├── index.php
│   ├── random.php
└── docker-compose.yml
```

Esta es la estructura principal de tu entorno, tu `docker-compose.yml` definirá los servicios que se lanzarán y cómo se comunicarán entre ellos. 

Recuerda que un archivo `Dockerfile` define una imagen o servicio y un archivo `docker-compose.yml` define un entorno completo, donde podemos usar varios contenedores. Un `.yml` no es más que un `.json` sin llaves y sin comas, usando tabulado para definir las anidaciones.

3. Investiga acerca de `docker compose` y cómo se configura el archivo `.yml`. Luego, en tu archivo `docker-compose.yml` define los servicios necesarios para lanzar el servidor web Apache que ya tienes junto a MySQL.
4. Modifica el archivo `index.php` añadiendo una conexión a la base de datos MySQL y mostrando si se ha podido conectar o hubo un error.
5. Crea un archivo `users.php` que muestre todos los usuarios de la tabla `users` en la base de datos.
6. Construye el entorno y lánzalo localmente.
7. Documenta como has hecho estos pasos en el archivo `README.md`.
8. Crea un contenedor en `docker hub` con el entorno que has creado y documenta como lo has hecho en el archivo `README.md`.
9. Modifica la página principal de `docker hub` con el comando necesario para lanzar el entorno con un solo comando.
10. Terminaste! No olvides de hacer `commit` y `push` a tu repositorio.

## Extra: Haz un CRUD

Crea 4 endpoints para leer, insertar, modificar y borrar usuarios
