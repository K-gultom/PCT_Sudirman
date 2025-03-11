
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\EtalaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\NoLogin;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);

Route::get('/etalase', [EtalaseController::class, 'index']);


Route::middleware([NoLogin::class])-> group(function(){

    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'index');
        Route::post('/login', 'store')->name('login');
    });

    Route::controller(RegisterController::class)->group(function(){
        Route::get('/register', 'index');
        Route::post('/register', 'store');
    });

});

Route::middleware(['auth'])->group(function(){ 

    Route::get('/logout', [AuthController::class, 'logout']);

    Route::controller(KategoriController::class)->group(function(){
        Route::get('/kategori', 'index');   //menampilkan halaman kategori

        Route::get('/kategori/add', 'create');  //untuk menampilkan form simpan data kategori
        Route::post('/kategori/add', 'store');  // untuk proses simpan data kategori

        Route::get('/kategori/edit/{id}', 'edit');  //untuk menampilkan form edit data kategori
        Route::post('/kategori/edit/{id}', 'update');   //untuk proses update/edit data kategori

        Route::get('/kategori/{id}', 'destroy');    //route untuk menghapus data kategori
    });

    Route::controller(BarangController::class)->group(function(){
        Route::get('/barang', 'index');

        Route::get('/barang/add', 'create');
        Route::post('/barang/add', 'store');

        Route::get('/barang/edit/{id}', 'edit');
        Route::post('/barang/edit/{id}', 'update');
        
        Route::get('/barang/{id}', 'destroy');
    });

});
