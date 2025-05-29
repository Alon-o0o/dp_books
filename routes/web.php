<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DealController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;


Route::get('/', [BookController::class, 'index'])->name('books.index');

Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show');

Route::get('/catalog', [BookController::class, 'catalog'])->name('books.catalog');

Route::resource('users', UserController::class);
Route::resource('deals', DealController::class);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

Route::get('/about', function () {
    return view('about');
})->name('about');


