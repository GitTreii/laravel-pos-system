<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/dashboard', function () {
    return redirect()->route('customers.index');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('customers', CustomerController::class);
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
