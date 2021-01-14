# CodeIgniter - Operaciones CRUD

Este es un laboratorio con pasos a seguir en la implementación de un sistema CRUD (Create Read Update Delete) usando CodeIgniter y MySQL.

### Requisitos

* PHP - versión 7.4
* Composer
* MySQL o MariaDB

## Creando nuestro proyecto
Corremos el siguiente comando en nuestra consola Windows o Linux, después esperamos a que se genere nuestra carpeta con los archivos necesarios.

```
$ composer create-project codeigniter4/appstarter [nombre-proyecto]
```

Luego nos metemos a la carpeta `[nombre-proyecto]`, y corremos el mini server de PHP con el comando `php spark serve` o si tienes `XAMPP` entonces genera el proyecto dentro de la carpeta `public`. Nos debería salir la página inicial así

 - startpage.png

## Editando la ruta Home

Ahora, debemos crear un Controller. Es básicamente una clase que permite delegar el trabajo y mostrar sitios web en la url. Imaginemos que tenemos la siguiente ruta de nuestro dominio: 

`http://127.0.0.1:8080/mensajes/holamundo`

Podemos imaginarnos que hay un controller llamado "mensajes". El método invocado cuando pedimos mensajes sería "holamundo". Este método tiene como trabajo mostrar o desplegar un saludo en el HTML.

Lo que nosotros haremos es crear un archivo `Operations.php` en la ruta `app/Controllers/`. Ahora, creamos el siguiente código

```php
<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Mensaje extends Controller
{
    public function index()
    {
        echo 'Hola Mundo desde función';
    }
}
```
Podemos ver que dirigiéndonos a la ruta `http://localhost:8080/operations` nos saldrá lo siguiente

- helloworldfunction.png

Y es que básicamente es la función padre de nuestro url, aquí podemos ahora redirigir a otro sitio html.

Ahora, podemos crear un archivo llamado `operations.php` dentro de nuestra carpeta `app/Views/`. Aquí podemos definir carpetas y adentro más sitios estáticos que pueden renderizar información. Por mientras solo creamos el sitio y pegamos lo siguiente.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <p>Operaciones CRUD</p>
</body>
</html>
```
Después, nos regresamos a nuestro Controller y agregamos una función llamada `operations`.

```php
public function operacionescrud()
{
    echo view('operations');
}
```

## License
[MIT](https://choosealicense.com/licenses/mit/)