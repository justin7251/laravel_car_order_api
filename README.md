## About Laravel Car Order Api

Laravel Car Order Api is a small API application using the Laravel framework. The app allows third parties to send car purchase orders to this API and then store the data for CRUD use. I also created Laravel Schedule task to delete data older than 3 days.

# CRUD
| Verb | Path | Action | Route Name
| :---:   | :-: | :-: | :-: |
| POST | /api/orders | store | orders.store
| GET | /api/orders/{uuid} | show | orders.show
| PUT/PATCH | /api/orders/{uuid}| update | orders.update

# Used
- Laravel 8
- PHP 7.4
- Docker
- mysql 5.7.22

## Installation
1. extra zip file then go into the extra folder
2. Install Composer packages [composer install]
3. Install Docker
4. Run Docker [docker-compose up]
5. Once the Database has been connected (Detail can be found .env)
6. Open a new terminal run command [php artisan migrate:fresh]


## Testing
1. I have created a phpunit test on tests/Feature/OrderApiTest.php
If you would like to run the test ensure docker is up the run[docker-compose exec laravel_car_order_api php ./vendor/bin/phpunit]
2. I have create a REST Client Plugin test (test.http)

## Possible improvement 

## Load Balancer

## Security
