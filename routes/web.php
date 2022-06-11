<?php

use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HostsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Route::get('/test', function () {
    return view('test');
})->name('test');




// Authentication Routes...
Route::get('sign_in', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('sign_in');
Route::post('sign_in', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Registration Routes...
Route::get('sign_up', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('sign_up');
Route::post('sign_up', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');


Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');
Route::get('/hosts', [HostsController::class, 'index'])->name('hosts');

Route::get('/profile/{user}', [UserController::class, 'show'])->name('profile.user');

Route::group([
    'middleware' => ['auth:web']
], function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/profile/{user}/edit', [UserController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/{user}', [UserController::class, 'update'])->name('profile.update');

    Route::resource('pet', PetsController::class, ['name' => 'pet']);

    Route::get('/doctors/applying', [DoctorsController::class, 'create'])->name('doctors.create');
    Route::post('/doctors', [DoctorsController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/{doctor}', [DoctorsController::class, 'show'])->name('doctors.show');
    Route::post('/doctors/{doctor}', [DoctorsController::class, 'update'])->name('doctors.update');

    Route::get('/hosts/applying', [HostsController::class, 'create'])->name('hosts.create');
    Route::post('/hosts', [HostsController::class, 'store'])->name('hosts.store');
    Route::get('/hosts/{host}', [HostsController::class, 'show'])->name('hosts.show');
    Route::post('/hosts/{host}', [DoctorsController::class, 'update'])->name('hosts.update');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


