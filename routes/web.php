<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::controller(GaleriController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/newImage', 'create');
        Route::post('/addImage', 'store');
        Route::get('/detailFoto/{id_foto}', 'show');
        Route::delete('/hapusFoto/{id_foto}', 'destroy');
    });
    Route::get('/logout', [AuthController::class, 'signout']);
});

Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('/register', 'signup');
        Route::post('/login', 'signin');
        Route::view('/login', 'auth.login', ['title' => 'Login'])->name('login');
        Route::view('/register', 'auth.register', ['title' => 'Register'])->name('register');
    });
    // Route::controller(GaleriController::class)->group(function () {
    //     Route::get('/register', 'index')->name('register');
    //     Route::get('/login', 'index')->name('login');
    // });
});
