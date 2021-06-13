<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Auth;
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



Route::view('/', 'welcome');
Auth::routes();

Route::prefix('user')->name('user.')->group(function (){

    Route::middleware(['guest:web'])->group(function (){
       Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::get('/register', [UserController::class, 'register'])->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check');

    });
    Route::middleware(['auth'])->group(function (){
        Route::get('/home', [UserController::class, 'home'])->name('home');
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    });
});

//Auth::routes();

Route::get('/home', [UserController::class, 'index'])->name('home');
