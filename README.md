## Case Study : TO-DO PLANNING

First make sure you're using PHP 8.1 or higher and have Composer installed.
Used Adapter and Strategy from design patterns.

#### To make Composer install the project's dependencies into vendor, run:
```
composer install
```

#### To create database and adding default data, run:
```
 php artisan migrate
```

#### To save provider's data to DB, run:
```
php artisan import:register-task-list
```

#### To start the server, run:
```
php artisan serve
```


#### Optional and Auxiliary  commands, run:
- **Deleting data added from providers from tables**
```
 php artisan delete:register-task-list
```












