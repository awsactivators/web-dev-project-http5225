<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



<!-- 
  composer create-project --prefer-dist laravel/laravel laravel
  cd laravel
  php artisan serve => start laravel
  php artisan migrate:refresh => recreates the table afresh (data will be lost)
  php artisan make:model Student -a --requests => create a table with all folders

  php artisan make:model Course -a --requests

   INFO  Model [app/Models/Student.php] created successfully.  

   INFO  Factory [database/factories/StudentFactory.php] created successfully.  

   INFO  Migration [database/migrations/2025_03_25_200731_create_students_table.php] created successfully.  

   INFO  Seeder [database/seeders/StudentSeeder.php] created successfully.  

   INFO  Request [app/Http/Requests/StoreStudentRequest.php] created successfully.  

   INFO  Request [app/Http/Requests/UpdateStudentRequest.php] created successfully.  

   INFO  Controller [app/Http/Controllers/StudentController.php] created successfully.  

   INFO  Policy [app/Policies/StudentPolicy.php] created successfully. 

  php artisan route:list => list all routes




 -->


 <!-- 
- create the blueprint table in the database/migration file 

- go to model and select the student model file and specify protected $fillabale variables which are fields that will be filled by the users 

database/factory is a shortcut for you to create fake realistic data. create all the fields you need using the fake() library (make sure to know the datatypes for your field.
e.g. 'email' => fake() -> unique() -> safeEmaile()
'fname' => fake() -> firstName()

database/seeder run your factory via the database seeder. if ou have multiple seeder files put them inside the databaseeder file so that it is easy to migrate

Student::factory(20) -> create()

use the associated factory (in this case StudentFactory) to create the seader

php artisan migrate:refresh --seed will delete the data and recreate it using the databseseeder

route in routes/web.php is a simple route to get, looks for the path and then function

route reources is used to tell the prefrix to all your routes (like prefix all routes with students) and specify where the controller is or to points to

php artisan route:list creates all the routes needed

resource/views create a folder for that student functionality and then create the individual files in them like index, create, edit, delete, detail

create a blade php file inside the student view to create a component/layout that doesnt chage like header, footer that other files will use

use @yield('conrent') in the body of the html which is where the page content is going to render

in other file like index.blade.php use the @extends('layout') to look for the layout file

and tell which section you want to render that content, looks for a 
@section('content')

--- content

@endsection 


add an index method to the student controller to return index view and with some data

add return for create view

create a form in create.blade.php using post method

add rules in app/http/request/store--- for form validation (check laravel available validation rules documentation)
  -->