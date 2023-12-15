<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\LoginController;
use App\Http\Controllers\client\RegisterController;
use App\Http\Controllers\client\UserController;
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


//user
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile/{id}', [UserController::class, 'view_profile'])->name('view_profile');
    Route::post('/add-avatar/{id}', [UserController::class, 'add_avatar'])->name('add_avatar');
    Route::post('/update-profile/{id}', [UserController::class, 'update_profile'])->name('update_profile');
    Route::post('/update-password/{id}', [UserController::class, 'update_password'])->name('update_password');
    Route::post('/create-referral/{id}', [UserController::class, 'create_referral'])->name('create_referral');
});



//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', [AdminLoginController::class, 'view_login'])->name('view_login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/register', [AdminLoginController::class, 'register'])->name('register');
    Route::group(['middleware' => ['auth:admin', 'check_admin']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/list-user', [DashboardController::class, 'list_user']);
    });
});