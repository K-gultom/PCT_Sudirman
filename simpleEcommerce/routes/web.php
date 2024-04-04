<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\katalogController;
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

//login
    Route::get('/login', [authController::class, 'index']);

//register
    Route::get('/register', [authController::class, 'register']);
    Route::post('/register', [authController::class, 'register_proses']);

//Katalog
    Route::get('/katalog', [katalogController::class, 'index']);