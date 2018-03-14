## TF - Simple Shop (in Laravel)

# Goal
Extend the existing Laravel application so that it can calculate the total for a shopping basket, and store the basket contents to the database.

# Guide
The existing Laravel application has the following things already set up:
- A Dockerised basic installation of Laravel (setup instructions below)
- A product catalog which can be accessed in JSON form here: http://localhost:8080/api/products

You will need to use the Products API to generate a sample JSON shopping basket, e.g.
```json
{
    "basket" : [{
            "product" : "Apple",
            "qty" : 2
        },
        {
            "product" : "Banana",
            "qty" : 1
        }
    ]
}
```

Create a API endpoint to which you can POST your sample basket JSON

This endpoint will then need to do two things:

- Calculate the total of the basket (using the existing Product model) and return it as JSON
- Save the contents of the basket to the database (you will need to setup the appropriate tables)

If you have a GitHub/Bitbucket account please put the code in a public repository and send us a link

# Marking Criteria

- Understanding of the task, and technical proficiency in meeting the outlined goal
- Adhearance to Laravel suggested project structure and best practises
- Inclusion of a suitable level of testing.

# Setup Instructions

- [Get Docker](https://www.docker.com/get-docker)
- Download this repository to a local folder
- Install dependancies by running
```
docker run --rm -v $(pwd):/app composer/composer install

```
- Start Docker
```
docker-compose up

```
- Create the database tables
```
docker-compose exec app php artisan migrate
```
- Seed the database with the sample products
```
docker-compose exec app php artisan db:seed
```
- The Product API can then be accessed at http://localhost:8080/api/products
- Any tests can be run with
```
docker-compose exec app ./vendor/bin/phpunit
```

# Resources

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

