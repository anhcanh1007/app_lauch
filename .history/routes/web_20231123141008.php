<?php

use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\LoginController;
use App\Http\Controllers\client\RegisterController;
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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/bounty', [HomeController::class, 'bounty'])->name('bounty');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

//login register
Route::get('/login', [LoginController::class, 'view_login'])->name('view_login');
Route::get('/register', [RegisterController::class, 'showFormRegister'])->name('showFormRegister');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['prefix' => 'user', 'as'])


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', function () {
        return view('backend.layouts.master');
    });
});