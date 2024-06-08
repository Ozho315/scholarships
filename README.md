<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Proyecto de becas universitarias, meramente para practicar.

## Base

Inicié instalando laravel de manera global 

```bash
composer global require laravel/installer
```

Ya con Laravel global puedo iniciar la app desde el comando general

Mi app se llamará Scholarships

```bash
laravel new scholarships
```
---
Voy llenando y respondiendo todas las preguntas que me hace el comando, iniciando con breeze, iniciando un repo de git para llevar control de los cambios, usando MySQL, usando Pest, etc.

Con breeze instalado voy a tener ya la capacidad de iniciar sesión, pero el contenido de la web va a estar en inglés, así que debo instalar un paquete que me permita manejar un multi-language 


## Laravel Lang

Para trabajar en español, lo ideal es usar un paquete que me permita manejar idiomas, en este caso `Laravel Lang`

Instalamos el paquete (ya en la carpeta del proyecto)

```bash
composer require laravel-lang/common --dev

php artisan lang:add es 

php artisan lang:update
```

Y en el .env coloco el español en el APP_LOCALE

```env
APP_LOCALE=es
```

Ya con eso el sistema buscará el archivo de idioma español para el sistema, y siempre que queramos colocar texto debemos usar constantes de texto, es decir:

En lugar de poner
```php
<h1>Este es el título</h1>
```

Usamos 
```php
<h1>__('This is the title')</h1>
```

Y en el archivo de idioma español (un archivo JSON) colocamos el significado

```json
{
    "This is the title": "Este es el título"
}
```
Puede parecer complicado pero a la larga permite manejarse mejor si quiero tener un sistema con más idiomas

## Dark mode

Para implementar el modo oscuro con un switcher se puede seguir este tutorial
https://rappasoft.com/blog/enabling-dark-mode-on-laravel-boilerplate-pro

Para utilizar también el modo del sistema se usa la segunda parte
https://rappasoft.com/blog/extending-tailwind-css-dark-mode-to-use-system-preference

## Levantar el proyecto
Ya una vez se haya realizado lo de arriba se puede levantar el proyecto sin problema, abriendo una terminal con 3 paneles y ejecutando en el primer panel 
```bash
php artisan serve
```
en el segundo panel

```bash
npm run dev
```

y el tercer panel para ejecutar comandos

## Roles y permisos
Para gestionar roles y permisos vamos a usar Laravel Permission de Spatie

### Instalar Laravel Permission

Aplicando los pasos de la (página oficial)[https://spatie.be/docs/laravel-permission/v6/introduction]

```bash
composer require spatie/laravel-permission

php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

php artisan config:clear

php artisan migrate
```
Ya con eso tenemos login, auth, recuperación de claves, verificación de correo, multi-idioma, roles y permisos en prácticamente nada

# El proyecto de becas

Ahora sí toca empezar con el desarrollo del sistema como tal, teniendo una base de sistema. Lo primero sería crear los modelos y migraciones (podemos incluir también los controladores pero lo haremos después)

Para crear un modelo junto a su migración ejecutamos el comando 

```bash
php artisan make:model Member -m 
```
el parámetro `-m` indica que debemos crear la migración junto al modelo, para saber todas las opciones podemos ejecutar

```bash
php artisan make:model --help
```

