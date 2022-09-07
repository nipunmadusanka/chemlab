<?php

use App\Http\Controllers\GdnController;
use App\Http\Controllers\GrnController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutControler;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuppliersController;
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
Route::get('/', [LoginController::class, "index"])->name('loginpage');
Route::post('/validate_login', [LoginController::class, "validate_login"])->name('validate_login');
Route::get('/dashboard', [HomeController::class, "index"])->name('homePage');

Route::get('/logout', [LogoutControler::class, "index"])->name('logout');

// Route::get('/', [HomeController::class, "index"])->name('homePage');

Route::get('/registration', [RegisterController::class, "index"])->name('registration');
Route::post('/registration', [RegisterController::class, "user_registration"])->name('user_registration');

// Defoult ::

Route::get('/productPage', [ProductController::class, "index"])->name('productPage');
Route::get('/viewProducts', [ProductController::class, "viewproducts"])->name('viewproducts');

Route::get('/locationPage', [LocationController::class, "index"])->name('locationPage');

Route::get('/suppliersPage', [SuppliersController::class, "index"])->name('suppliersPage');

Route::get('/grnPage', [GrnController::class, "index"])->name('grnPage');

Route::get('/gdnPage', [GdnController::class, "index"])->name('gdnPage');

