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
