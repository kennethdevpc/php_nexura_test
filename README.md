<p align='left'>
    <img src='https://raw.githubusercontent.com/kenpulicorre/countries_proyect/main/client/src/images/bandera.gif' </img>
</p>

# Projecto Laravel CRUD,3 tablas

## Objetivos del Proyecto

-   Construir una App utlizando Larave, Redux, Node y Sequelize.
-   Debe utilizar programación orientada a objetos (Clases).
-   Es obligatorio utilizar los cinco tipos de campos (Text, Textarea, Select, Radio,
    Checkbox).
-   Validar datos de entrada con JavaScript en el cliente y con php en el servidor.
-   Manejar mensajes de error y confirmación cuando se crea, modifica o elimina un
    registro.
-   Controlar errores en tiempo de ejecución.

## Comenzando

1.  Clonar el repositorio en sus computadoras para comenzar a trabajar

Tendrán un `boilerplate unico` con la estructura general tanto del servidor como de cliente.

**IMPORTANTE:** Es necesario contar minimamente con la última versión estable de Node y NPM. Asegurarse de contar con ella para poder instalar correctamente las dependecias necesarias para correr el proyecto. es necesario tener instalado Composer

Actualmente las versiónes necesarias son:

-   **Node**: 12.18.3 o mayor
-   **NPM**: 6.14.16 o mayor
-   **Laravel Framework**: 10.3.3
-   **node**: v18.10.0
-   **composer** : version 2.4.2
-   **PHP**: 8.1.2-1ubuntu2.11
-   **Se utilizo un servdor apache con Xampp y se utilizo mysql como base de datos**

**importante2:** debes colocar en el archivo .env en la carpeta api,
y puede llenar como este ejemplo :se proporciona la base de datos adjunta en este repositorio, si desea probar el ejercicio de manera mas dinamica, es importante que cree su base de datos con el mismo nombre "sistemaempleado"

         DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=sistemaempleado
         DB_USERNAME=root
         DB_PASSWORD=

donde `DB_PORT` asegurese que sea el indicado usualmente se utiliza: `3306`

## BoilerPlate

Adicionalmente será necesario que creen desde Mysql una base de datos llamada `sistemaempleado` si desea usar nuestra fuente de base de datos sino puede colocar la deseada

## Enunciado

-   el proyecto se construyo con laravel, en este sentido debe de instalar dependencias de node y las respectivas dependencias de composer. por lo tanto ejecute:

#### Tecnologías necesarias:

-   [ ] Laravel
-   [ ] Composer
-   [ ] Node
-   [ ] PHP
-   [ ] MYSQL

## Comandos de ejecucion :

para ejecutar el archivo solo debe de instalar las dependencias, debe de dirijirse a la carpeta desde la terminal y ejecutar :

Para instalar el composer

```
Composer install
```

para dependencias adicionales:

```
npm install
```

y una vez se tengan instaladas las dependencias ejecutar la aplicacion,

```
npm run dev
```

-para visualizar el proyecto se ejectuto la sigueinte ruta en el nevegador:

```
http://localhost:82/empleado/public
```

ya que para ejecutar se utilizo la herramienta xampp y se creo el proyecto en nuestra carpeta htdocs.

<hr/>

---

## **AUTOR**

**kenneth E. Puliche Correa**

### <h3> 🤝🏻 &nbsp;Connect with Me </h3>

Email: **ingkeneidel@gmail.com**

Wpp: **<a href="https://wa.link/2rl3qe"> +573184484423 </a>**

## 🌐 Socials:

[![LinkedIn](https://img.shields.io/badge/LinkedIn-%230077B5.svg?logo=linkedin&logoColor=white)](https://www.linkedin.com/in/kennethe-p-813311225/)
</br>

---

```

```

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
