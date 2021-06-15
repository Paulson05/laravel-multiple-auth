<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Route::view('/', 'welcome');
Auth::routes();


Route::prefix('user')->name('user.')->group(function (){

    Route::middleware(['guest:web' ,'PreventBackHistory'])->group(function (){
       Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::get('/register', [UserController::class, 'register'])->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check');

    });
    Route::middleware(['auth:web' ,'PreventBackHistory'])->group(function (){
        Route::get('/home', [UserController::class, 'home'])->name('home');
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    });
});


Route::prefix('admin')->name('admin.')->group(function (){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function (){
        Route::get('/login', [AdminController::class, 'login'])->name('login');

        Route::post('/home', [AdminController::class, 'create'])->name('create');
        Route::post('/check', [AdminController::class, 'check'])->name('check');

    });
    Route::middleware(['auth:admin','PreventBackHistory'])->group(function (){
        Route::get('/home', [AdminController::class, 'home'])->name('home');
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    });
});

Route::prefix('writer')->name('writer.')->group(function (){

    Route::middleware(['guest:writer','PreventBackHistory'])->group(function (){
        Route::get('/login', [WriterController::class, 'login'])->name('login');
        Route::get('/register', [WriterController::class, 'register'])->name('register');

        Route::post('/home', [WriterController::class, 'create'])->name('home');
        Route::post('/check', [WriterController::class, 'check'])->name('check');

    });
    Route::middleware(['auth:writer','PreventBackHistory'])->group(function (){
        Route::get('/home', [WriterController::class, 'home'])->name('home');
        Route::get('/logout', [WriterController::class, 'logout'])->name('logout');

    });
});
//Auth::routes();

Route::get('/homepage', [HomeController::class, 'home'])->name('homepage');
