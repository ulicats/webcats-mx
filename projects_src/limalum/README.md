
### Requisitos

Para usar este proyecto es necesario lo siguiente:

```
* PHP version >= 8.3
* Componser
* NodeJS (recomendado version >= 20.10) 
```

### Instalación

Lo primero que necesitamos para instalar el proyecto es instalar las librerias PHP con Composer.

Ejecuta en terminal:

```
composer install
```
Despues descargamos los paquetes necesarios para vuejs y compilamos los archivos
```
npm install
```
```
npm run dev
```
Por ultimo es necesario crear las tablas y sembrar los datos en la base de datos 
```
php artisan migrate --seed
```
Con esto ya estaria instalado el proyecto.

## NOTA 
No olvides antes agregarle la información de la base de datos al archivo .env 

