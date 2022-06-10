<?php

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

Route::get('/sign_in', function () {
    return view('pages.auth.sign_in');
})->name('sign_in');

Route::get('/sign_up', function () {
    return view('pages.auth.sign_up');
})->name('sign_up');


//// Authentication Routes...
//Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('sign_in');
//Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
//Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
//
//// Registration Routes...
//Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('sign_up');
//Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index'])->name('profile');


Route::resource('pet', \App\Http\Controllers\PetsController::class, ['name' => 'pet']);
