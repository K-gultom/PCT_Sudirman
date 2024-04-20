<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\katalogController;
use App\Http\Controllers\productController;
use App\Http\Middleware\NoLogin;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [dashboardController::class, 'index']);


Route::middleware([NoLogin::class])->group(function(){

    //login
    Route::get('/login', [authController::class, 'index'])->name('login');
    Route::post('/login', [authController::class, 'store']);

    //register
    Route::get('/register', [authController::class, 'register']);
    Route::post('/register', [authController::class, 'register_proses']);

});

Route::middleware(['auth'])->group(function(){

    //logout
    Route::get('/logout', [authController::class, 'logout']);

    //katalog
    Route::get('/katalog', [katalogController::class, 'index']);


    //Category
    Route::get('/category', [categoryController::class, 'index']);
    
    Route::get('/add/category', [categoryController::class, 'add']);
    Route::post('/add/category', [categoryController::class, 'addProses']);

    Route::get('/edit/category/{id}', [categoryController::class, 'edit']);
    Route::post('/edit/category/{id}', [categoryController::class, 'editProses']);

    Route::get('/del/category/{id}', [categoryController::class, 'delete']);


    //Product
    Route::get('/product', [productController::class, 'index']);

    Route::get('/add/product', [productController::class, 'add']);
    Route::post('/add/product', [productController::class, 'addProses']);




});


