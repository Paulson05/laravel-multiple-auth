<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
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

Route::get('/', function () {
    return view('admin.pages.dashboard');
});

Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('showAdminRegisterForm');
Route::get('/admin/postregister', [RegisterController::class, 'createAdmin'])->name('createAdmin');
Route::get('/writer/register', [RegisterController::class, 'showWriterRegisterForm'])->name('showWriterRegisterForm');
Route::get('/writer/postregister', [RegisterController::class, 'createWriter'])->name('createWriter');

Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('showadminlogin');
Route::post('/admin/post', [LoginController::class, 'adminLogin'])->name('adminLogin');
Route::get('/writer/login', [LoginController::class, 'showWriterLoginForm'])->name('showWriterLoginForm');
Route::post('/writer/post', [LoginController::class, 'writerLogin'])->name('writer.login');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('writer', [WriterController::class, 'index'])->name('writer');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
