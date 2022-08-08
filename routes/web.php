<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name("home");

Route::middleware("guest")->group(function () {
    Route::get('register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name("register");
    Route::post('registerAction', [\App\Http\Controllers\AuthController::class, 'registerAction'])->name("registerAction");
    Route::get('login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name("login");
    Route::post('loginAction', [\App\Http\Controllers\AuthController::class, 'loginAction'])->name("loginAction");

});

route::middleware("auth")->group(function() {
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name("logout");
});



Route::get('register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name("register");
Route::post('registerAction', [\App\Http\Controllers\AuthController::class, 'registerAction'])->name("registerAction");
