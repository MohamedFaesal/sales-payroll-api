# Api Task
This is a simple code for sales payroll api to retrieves the date that employees will be paid their salaries with php 7.

# Installation

* Install <a href = "https://getcomposer.org/">composer </a>
* Pull the code
````
git clone https://github.com/MohamedFaesal/sales-payroll-api.git
````
* Get inside the project
````
cd sales-payroll-api
````
* Install dependencies
````
composer install
````
* Upload database to local mysql you will find it under DB folder
* put some data int the DB or run the following commands to load dummy data
````
php artisan make:seeder UserTypesTableSeeder
php artisan make:seeder UsersTableSeeder
````
* launch the server
````
php artisan serve --port=8080
````

* you can call the api resource to get some data about an employee with his payment dates (use postman)
````
http://127.0.0.1:8080/api/users/1
````

**Note:** Make sure you install php 7 especially theses extensions (mbstring | php-xml)
