# SendStation
Repositorio de pruebas de gestion de usuarios y bases de datos.

## Comenzando
_Utilizando Docker con Bitnami:_

```
$ mkdir ~/myapp && cd ~/myapp
$ curl -LO https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml
$ docker-compose up
```

```
Lista de comandos Laravel artisan:

$ docker-compose exec myapp php artisan list
List all registered routes:

$ docker-compose exec myapp php artisan route:list
Create a new application controller named UserController:

$ docker-compose exec myapp php artisan make:controller UserController
Installing a new composer package called phpmailer/phpmailer with version 5.2.*:

$ docker-compose exec myapp composer require phpmailer/phpmailer:5.2.*
```
## Author
Michael Martinez
CEO - SendStation

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
Docker Instalado:  Docker: https://hub.docker.com/r/bitnami/laravel
