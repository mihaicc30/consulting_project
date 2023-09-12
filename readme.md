
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# EZEPost

### Live deployed project:
- https://ezepost.fly.dev

### Prerequisites for running locally:
-  **You have installed :**
-- PHP minimum v8.2.7
-- Composer
-- Laravel 10
-- WAMP/XAMPP (that will include the Apache and MySQL Server)

- **Grab the project files** 
-- Create a new folder, open a terminal, run  `git clone https://github.com/FloreaCT/consulting_project.git` or just copy the folder from Solent

- **Get the .env file** 
-- Inside the project folder, run `cp .env.example .env` to create the .env file or copy the file from the Solent package

- **MySQL is up and running** 
-- MySQL is online on port `3306` or modify the `DB_PORT` from the `.env` file to your currently running sql port
-- Populate the database by either importing the provided sql database or run `php artisan migrate` inside the project folder
-- Have an user account set up with the credentials `user = 'root'` `password = ''` or modify the `DB_USERNAME` and `DB_PASSWORD` from the `.env` file to reflect your user account

- **Install dependencies**
-- `npm install` 
-- `composer install` 
-- `php artisan migrate`  in the case you chose not to import the provided sql file

- **Run project**
--  run inside the terminal of the project folder `php artisan serve` 
-- Open your web browser and navigate to http://localhost:8000 or http://127.0.0.1:8000.
