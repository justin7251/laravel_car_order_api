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
1. PHP Application is much slower running in Docker and if OpCache is being install it can imporve the performance from running the code in shared memory. 

2. A load balancer is a device that acts as a reverse proxy and distributes network or application traffic across a number of servers. Load balancers are used to increase capacity (concurrent users) and reliability of applications.[F5][1]It helps divide traffic and ensure high availability and reliability of services by only sending requests to servers that are online.
Readings: 
(https://www.nginx.com/resources/glossary/load-balancing/)
(https://towardsdatascience.com/sample-load-balancing-solution-with-docker-and-nginx-cf1ffc60e644)
(https://blog.laravel.com/vapor-api-gateway-vs-load-balancers)

3. Security is my last but not least area to be imporve, the API request contain a simple field validation, but there might be more work to do, e.g try catch on exception error, text into clean up on any tags <script>.
Lastly, I would also like to setup OAuth 2.0 for API authentication and authorization standard protects user data by providing access to the data without revealing the user’s identity or credentials.

[1]: https://www.f5.com/services/resources/glossary/load-balancer#:~:text=A%20load%20balancer%20is%20a,users)%20and%20reliability%20of%20applications.