##Ejercicio Laravel TestLaravel
Este proyecto esta basado en un repositorio para realizar pruebas de test Unitarios en una aplicación, se siguieron los siguientes pasos:

1.  Verificamos que tengamos intaladas las siguientes aplicaciones que se necesitan para trabajar en el repositorio, el caso de no tener instalados dichas aplicaciones se dejara el link y la versión para ser instaladas.

 **a)**. ***Node Js,  https://nodejs.org/es/ , se instalara la versión que dice LTS, ya que es la más estable.***
 
    **b)**. ***Xampp, apachefriends.org/es/download.html, dependiendo el sistema operativo que maneje y la versión de php en el qe trabaja su proyecto***

    **c)**. ***Composer , https://getcomposer.org/download/ se instala la versión mas reciente del composer***


####CREANDO UN NUEVO PROYECTO CON LARAVEL
1. Despues de verificar la instalación de las aplicaciones, creamos un nuevo proyecto de laravel

    Abrimos la consola en el cmd, nos dirigimos a la direccion donde queremos ubicar nuestro proyecto, ingresamos a esa direcccion mediante la consola, depues de ubicar donde queremos el repositorio y ejecutamos el siguiente comando:
     - laravel new (nombre del proyecto) en este casa el poryecto se llamara ***"TestLaravel"***
     
 Verificamos que nuestro proyecto se haya creado correctamente.
 
### Trabajando el proyecto TestLaravel
- Ingresamos a VSC ("Visual Studio Code") y abrimos la carpeta donde se creó nuestro proyecto.

- Al momento de abrir nustro proyecto, nos dirijismos a la carpeta de test y verificamos que esten los dos ejemplos, el ejemplo de carpeta unit y el ejmplo de la carpeta feacture.

###Corriendo el test
- Ejecutamos la prueba a traves del terminal, hay dos comandos para realizar la prueba, el mas efectivo es el siguiente:
***php artisan test***

- Este comando da una descripcion general, muy clara y estructurada de la prueba, se ve en la ejecución que se tiene una prueba de ejemplos dentro de la carpeta feacture y unit

- En el archivo phpunit.xml  se puede configurar opciones específicas para nuestra prueba, la parte mas importante del archivo son las suites de prueba, esto asegurará que la unidad php pueda ejecutar pruebas desde aquí.

- Para crear una nueva prueba se hace a traves de l aterminal con el siguiente comando
***php artisan make:test UserTets***

###Creando Pruebas Unitarias

- Para generar una prueba unitaria se hace el siguiente comando:
***php artisan make:test UserTest --unit***

- Esto creará un archivo dentro de la carpeta unit

- la forma mas sencilla de probarlo es a traves del andamio de autenticación que nos permite usar el modelo del usuario, en la terminal ejecutamos lo siguiente:
***composer require laravel/ui***

- Luego de la interfaz de usuario que acabamos de extraer digitamos el siguiente codigo:
***php artisan ui react --auth***

- Despues ejecutamos
***npm install && npm run dev***

- En algunos casos el codigo anterior no funciona o genera errores en la terminal de VSC, si es el caso, lo mas recomendable es que abra la consola de su sistema operativo y ejecutar el codigo por separado, de la siguiente manera:
***npm install
npm run dev***
![](https://github.com/MClk23/TetsLaravel/blob/master/img/npm%20install.png?raw=true)

- Este comando lo que hace es crear varios archivos, al mismo tiempo que el comando crea los archivo podemos ir creando la base de datos de manera manual en php Myadmin

- Despues de a ver creado la base de datos verificamos en el archivo . env que en la linea BD_Database este nombrada con el mismo nombre de la base de datso creada con anterioridad.

![](https://github.com/MClk23/TetsLaravel/blob/master/img/base%20de%20datos.png?raw=true)

- El ultimo paso es migrar las migraciones con la siguiente linea de codigo en la terminal:
***php artisan migrate***

- Nos dirigimos a la carpeta Unit, y entramos al archivo UserTest, y eliminamos el public function predeterminado que crea laravel, al momento de iniciar el proyecto.

- Luego, codificamos el siguiente código:
![](https://github.com/MClk23/TetsLaravel/blob/master/img/public.png?raw=true)

- Con el código anterior, recibiremos un mensaje de error, porque estamos usando un método indefinido, ya que Laravel no reconoce el TestCase creado, así que eliminamos el caso de prueba predeterminado, y codificamos lo siguiente:

		use Tests\TestCase;

- Volvemos a ejecutar el test con el comando: php artisan test

- Luego, procedemos a validar el inicio de sesión, así que justo debajo de nuestro formulario de prueba de inicio se sesión, codificamos el siguiente código:
![](https://github.com/MClk23/TetsLaravel/blob/master/img/login.png?raw=true)
