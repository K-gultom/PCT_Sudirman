<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\todoController;
use App\Http\Middleware\NoLogin;
use Illuminate\Support\Facades\Route;


Route::get('/', [authController::class, 'index']);

Route::middleware([NoLogin::class])-> group(function(){

    Route::post('/', [authController::class, 'store'])->name('login');

    Route::get('/register',[registerController::class,'create']);
    Route::post('/register',[registerController::class,'store']);

});

route::middleware(['auth'])->group(function(){

    Route::get('/logout', [authController::class, 'logout']);


    Route::get('/home', [homeController::class, 'index']);

    Route::get('/todo/{id}', [todoController::class, 'show']);
    
    Route::get('/add/todo', [todoController::class, 'create']);
    Route::post('/add/todo', [todoController::class, 'store']);

    Route::get('/edit/todo/{id}', [todoController::class, 'edit']);
    Route::post('/edit/todo/{id}', [todoController::class, 'update']);

    Route::get('/todo/del/{id}', [todoController::class, 'destroy']);


});