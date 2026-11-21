# Laravel POS System
A Point-of-Sale application developed using Laravel, MySQL, Eloquent ORM, and Laravel Breeze authentication.

## Features

- Home and About pages
- Customer account management
- User account management
- Create, edit, update, and delete operations
- Laravel resource routes and controllers
- Form validation
- Profile picture uploads
- Avatar image resizing using Intervention Image
- MySQL database integration
- Eloquent ORM
- Laravel Breeze login and registration
- Authentication-protected customer and user management

## Routes

- `/` - Home
- `/about` - About
- `/login` - Login
- `/register` - Registration
- `/customers` - Customer Accounts
- `/users` - User Accounts

Customer and User management routes require authentication.

## Technologies Used

- PHP
- Laravel
- MySQL
- Laravel Breeze
- Eloquent ORM
- Blade Templates
- Intervention Image
- Composer

## Database

Database name: `laravel_pos_system`

Tables:
- customers
- users
- migrations
- password_reset_tokens
- sessions

## Installation

1. Clone or download the repository.
2. Run `composer install`.
3. Copy `.env.example` to `.env`.
4. Configure the MySQL database connection.
5. Run `php artisan key:generate`.
6. Run `php artisan migrate`.
7. Run `php artisan db:seed --class=PosSeeder`.
8. Run `php artisan storage:link`.
9. Run `php artisan serve`.
10. Open `http://127.0.0.1:8000`.

## Authentication

Laravel Breeze provides login and registration functionality.

Customer and User resource routes are protected using Laravel authentication middleware.

Existing user accounts can log in using their usernames and passwords.

## Developer

Tracey Justin Devilleres