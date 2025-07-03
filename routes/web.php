<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DealController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/', [BookController::class, 'index'])->name('books.index');

Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show');

Route::post('/profile/upload-photo', [UserController::class, 'uploadPhoto'])->name('profile.photo.upload')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/buy/{book}', [PurchaseController::class, 'buy'])->name('book.buy');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});

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


