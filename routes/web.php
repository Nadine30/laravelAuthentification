<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class,'create']);
Route::post('/',[AuthController::class,'store']);
Route::get('/connexion',[AuthController::class,'createConnexion']);
Route::post('/connexion',[AuthController::class,'storeConnexion']);