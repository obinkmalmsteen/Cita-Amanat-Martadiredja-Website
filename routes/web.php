<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//Login
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'loginProses'])->name('loginProses');
//Logout
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('checkLogin')->group(function(){

// Dashboard
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
//User
Route::get('user',[UserController::class,'index'])->name('user');
Route::get('user/create',[UserController::class,'create'])->name('userCreate');
Route::post('user/store',[UserController::class,'store'])->name('userStore');

});

