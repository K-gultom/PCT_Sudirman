<?php

use App\Http\Controllers\firstController;
use Illuminate\Support\Facades\Route;


Route::controller(firstController::class)->group(function(){

    Route::get('/', 'index');
    Route::post('/', 'hitung');
});