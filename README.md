# To-Do-List
Prueba tecnica - Junior Developer - Laravel

Requisitos previos:
**********************************
PHP y Composer:
Asegúrate de tener PHP instalado en tu sistema. Puedes descargarlo desde php.net.
Instala Composer siguiendo las instrucciones en getcomposer.org.
***********************************
Laravel:
Instala Laravel utilizando Composer:
  composer global require laravel/installer (lo puedes instalar de manera especifica en un entotno virtual si deseas)
***********************************
Base de datos:
  No olvides crear la base de datos que usaras y tener presente el nombre para reemplzarlo por el que se encuentra en el archivo .env del proyecto
***********************************

////////////////////////////////////

Instrucciones de instalación:

1 - Clona el repositorio desde GitHub:
2 - Instalar dependencias:
    ejecuta "composer install"
3 - Configurar el archivo .env:
    Copia el archivo .env.example y renómbralo a .env.
    Configura las variables de entorno, especialmente las relacionadas con la base de datos (nombre db, host, user, password).
4 - Ejecutar el comando "php artisan migrate" para ejecutar todas las migraciones y asi crear las tablas necesarias para que el proyecto funncione de forma correcta
5 - Iniciar el servidor con "php artisan serve"
6 - Acceda a la aplicación:
    Visita http://localhost:8000 en tu navegador.
    Crea una cuenta o inicia sesión si ya tienes una.
    Explora las funcionalidades de la aplicación, como la creación, actualización y eliminación de tareas.
    
