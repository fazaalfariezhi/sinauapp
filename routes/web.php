<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserMateriController;
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
    return view('landing.index');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [AccountController::class, 'index'])->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Route::resource('/home/my-course', UserCourseController::class)->middleware('auth');
Route::resource('/home/mycourse', UserMateriController::class)->middleware('auth');

Route::resource('/pelajarans', PelajaranController::class)->middleware('auth');

Route::get('/home/coba', [PelajaranController::class, 'coba']);

// Route::get('/home/pelajarans/checkSlug', [PelajaranController::class, 'checkSlug']);

// Route::get