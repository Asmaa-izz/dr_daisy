<?php

use App\Http\Controllers\PetsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/doctors', function () {
    return view('pages.doctors');
})->name('doctors');

Route::get('/hosts', function () {
    return view('pages.hosts');
})->name('hosts');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');


// Authentication Routes...
Route::get('sign_in', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('sign_in');
Route::post('sign_in', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Registration Routes...
Route::get('sign_up', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('sign_up');
Route::post('sign_up', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');


Route::group([
    'middleware' => ['auth:web']
], function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::resource('pet', PetsController::class, ['name' => 'pet']);
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


