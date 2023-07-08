<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/tutorial', 'tutorial');
    Route::get('/about', 'about');
    Route::get('/kerusakan', 'kerusakan');
    // Route::get('/data', 'data');
});

Route::controller(HitungController::class)->group(function () {
    Route::get('/hitung', 'index')->middleware('auth');
    Route::post('/hitung', 'predict');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('login')->middleware('guest');
    Route::post('/register', 'store');
});

Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/datatraining', [AdminController::class, 'datatraining']);
    Route::get('/tambahdata', [AdminController::class, 'tambahdata']);
    Route::post('/tambahdata', [AdminController::class, 'adddata']);
    Route::delete('/deletedata/{id}', [AdminController::class, 'deletedata']);
    Route::get('/datalabel', [AdminController::class, 'datalabel']);
    Route::get('/tambahlabel', [AdminController::class, 'tambahlabel']);
    Route::post('/tambahlabel', [AdminController::class, 'addlabel']);
    Route::delete('/deletelabel/{id}', [AdminController::class, 'deletelabel']);
    Route::get('/datatesting', [AdminController::class, 'datatesting']);
    Route::get('/registrasiadmin', [AdminController::class, 'registrasiadmin']);
});

