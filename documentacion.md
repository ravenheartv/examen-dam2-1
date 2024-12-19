## SPRINT 1

iniciamos el repositorio e iniciamos sesion en docker

![docker inicio sesion](image.png)

## SPRINT 2
 creamos la carpeta de apache con dockerfile dentro.

```
mkdir apache
cd apache
touch Dockerfile
```

arrancamos y lanzamos la imagen

```
docker build -t apache-server .
docker run -d -p 8080:80 apache-server
```
![docker funcionando](imagendocker.png)

## SPRINT 3

copio la carpeta y le cambio el nombre

```
cp -r apache apache-php
cd apache-php
```
modifico el docker file para que funcione con php

FROM php:7.4-apache
COPY ./index.php /var/www/html/

usamos los mismos comandos para runear y...

```
docker build -t apache-php-server .
docker run -d -p 8080:80 apache-php-server
```
![php funcionando](imagenphpfunciona.png)

## SPRINT 4 

copiamos la carpeta de nuevo y añadimos dos archivos uno de ellos info.php

```
<?php
phpinfo();
?>
```

y el otro random.php

```
<?php
$number = rand(1, 100);
$elements = ["Elemento1", "Elemento2", "Elemento3", "Elemento4", "Elemento5"];
echo json_encode([
    "random_number" => $number,
    "parity" => $number % 2 === 0 ? "par" : "impar",
    "random_element" => $elements[array_rand($elements)]
]);
?>
```

funcionando:

![infophp](phpinfo.png)
![random funcionando](random-php.png)
