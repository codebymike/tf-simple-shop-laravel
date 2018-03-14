# TF - Simple Shop (in Laravel)

## Goal
Extend the existing Laravel application so that it can calculate the total for a sample shopping basket, and save the basket contents and total to the database.

## Guide
The existing Laravel application has the following things already set up:
- A Dockerised basic installation of Laravel (setup instructions below)
- A small product catalogue which can be accessed here: http://localhost:8080/api/products

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
- Save the contents of the basket to the database (you will need to make the appropriate table structure)

If you have a GitHub/Bitbucket account please put the code in a public repository and send me a link.

If you have any questions or problems - email me at mthomas[at]toxicfox.co.uk

## Marking Criteria

- Comprehension of the task, and technical proficiency in meeting it
- Adherence to Laravel best practises
- Presence of a suitable level of testing.

## Setup Instructions

- [Get Docker](https://www.docker.com/get-docker)
- Download this repository to a local folder
- Install Laravel dependencies by running
```
docker run --rm -v ${PWD}:/app composer update
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
- To inspect the DB from outside Docker, just use the .env DB credentials and host 127.0.0.1:33061

## Resources

- [Docker Basics](https://docs.docker.com/get-started/)
- [Laravel](https://laravel.com/docs/5.6)