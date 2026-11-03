# Laravel POS System

A basic Point-of-Sale application developed using Laravel and the MVC architecture.

## Features

- Home page
- About page
- Customer Accounts page with 5 sample records
- User Accounts page with 5 sample records
- Navigation between all four pages
- Static PHP arrays for sample data
- Blade templates using @foreach
- Laravel routes and controllers

## Routes

- `/` - Home
- `/about` - About
- `/customers` - Customer Accounts
- `/users` - User Accounts

## Technologies Used

- PHP
- Laravel
- Blade Templates
- Composer
- HTML

## Project Structure

- `routes/web.php` - Application routes
- `app/Http/Controllers/PageController.php` - Home and About pages
- `app/Http/Controllers/CustomerController.php` - Customer records
- `app/Http/Controllers/UserController.php` - User records
- `resources/views/` - Blade templates

## Installation

1. Install PHP and Composer.
2. Download or clone this repository.
3. Open a terminal in the project folder.
4. Run `composer install`.
5. Copy `.env.example` to `.env`.
6. Set `SESSION_DRIVER=file` in `.env`.
7. Run `php artisan key:generate`.
8. Run `php artisan serve`.
9. Open `http://127.0.0.1:8000`.

## Data Source

This application uses static PHP arrays containing five customer records and five user records.

No database connection is required for the account listings.

## Developer

Tracey Justin Devilleres