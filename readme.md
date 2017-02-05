

# Follow Below Step To Run this Repository

1. Install Lumen Micro Framework

  -> Follow Lumen Doc Step : https://lumen.laravel.com/docs/5.4

2. Start Lumen Server

  -> php -S localhost:8000 -t public

3. In Lumen Model and Controller not Supported. That why Install lumen-generator package.

  -> composer require wn/lumen-generators

  Then add the service provider in the file app/Providers/AppServiceProvider.php like the following:

  public function register()
  {
      if ($this->app->environment() == 'local') {
          $this->app->register('Wn\Generators\CommandsServiceProvider');
      }
  }

  Create Model : php artisan wn:model ModelName
  Create Controller : php artisan wn:controller ControllerName

  Reference Link : https://github.com/webNeat/lumen-generators#installation

4. Add Below Line in bootstrap/app.php file.

  -> $app->register('Wn\Generators\CommandsServiceProvider');

5. Uncomment below two lines in bootstrap/app.php file.

  -> $app->withFacades();
  -> $app->withEloquent();

Demo API Example Reference Link : https://coderexample.com/restful-api-in-lumen-a-laravel-micro-framework/


Demo API using below links.

  Run : php -S localhost:8000 -t public

1. Add Record : http://localhost:8000/student - POST METHOD
2. Remove Record : http://localhost:8000/student/{id} - DELETE METHOD
3. Fetch All Records : http://localhost:8000/student - GET METHOD
4. Fetch Single Rcord : http://localhost:8000/student/{id} - GET METHOD
5. Update Record : http://localhost:8000/student/update = POST METHOD


# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
