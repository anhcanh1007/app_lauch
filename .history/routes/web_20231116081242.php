<?php

use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\LoginController;
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

Route::get('/login', [LoginController::class, 'view_login'])->name('view_login');
Route::get('/register', [LoginController::class, 'view_register'])->name('view_register');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){

});