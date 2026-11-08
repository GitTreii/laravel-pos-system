# Laravel POS System

A basic Point-of-Sale application developed using Laravel, MySQL, and Eloquent ORM.

## Features

- Home and About pages
- Customer Accounts with 5 sample records
- User Accounts with 5 sample records
- MySQL database integration
- Laravel migrations and database seeding
- Eloquent models for customers and users
- Blade templates using @foreach
- Navigation between all four pages

## Routes

- `/` - Home
- `/about` - About
- `/customers` - Customer Accounts
- `/users` - User Accounts

## Technologies

- PHP
- Laravel
- MySQL
- Eloquent ORM
- Blade Templates
- Composer

## Database

Database name: `laravel_pos_system`

Tables:
- `customers`
- `users`

The database schema is defined through Laravel migrations, and sample records are inserted using `PosSeeder.php`.

## Installation

1. Clone or download the repository.
2. Run `composer install`.
3. Copy `.env.example` to `.env`.
4. Configure the MySQL connection:

   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_pos_system
   DB_USERNAME=root
   DB_PASSWORD=
   SESSION_DRIVER=file
   ```

5. Create the `laravel_pos_system` database in MySQL.
6. Run `php artisan key:generate`.
7. Run `php artisan migrate`.
8. Run `php artisan db:seed --class=PosSeeder`.
9. Run `php artisan serve`.
10. Open `http://127.0.0.1:8000`.

## Project Structure

- `app/Models/Customer.php`
- `app/Models/User.php`
- `app/Http/Controllers/CustomerController.php`
- `app/Http/Controllers/UserController.php`
- `database/migrations/`
- `database/seeders/PosSeeder.php`
- `resources/views/`
- `routes/web.php`

## Data Source

Customer and user records are stored in MySQL and retrieved through Laravel Eloquent models instead of static PHP arrays.

## Developer

Tracey Justin Devilleres