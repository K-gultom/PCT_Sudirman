<?php

use App\Http\Controllers\firstController;
use App\Http\Controllers\logicController;
use App\Http\Controllers\secondController;
use Illuminate\Support\Facades\Route;


Route::get('/', [firstController::class, 'index']);

Route::get('/second-screen', [secondController::class, 'second_screen']);
Route::get('/third-screen', [secondController::class, 'third_screen']);
Route::get('/fourth-screen', [secondController::class, 'fourth_screen']);


Route::get('/logic', [logicController::class, 'index']);