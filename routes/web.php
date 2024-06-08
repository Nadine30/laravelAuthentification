<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class,'create'])->name('register');
Route::post('/',[AuthController::class,'store'])->name('register.post');

Route::get('/connexion',[AuthController::class,'createConnexion'])->name('login');
Route::post('/connexion',[AuthController::class,'storeConnexion'])->name('login.post');