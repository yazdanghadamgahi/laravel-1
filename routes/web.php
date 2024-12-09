<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;


Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);
//auth
Route::get('/register',[RegisterUserController::class,'create']);
Route::post('/register',[RegisterUserController::class,'store']);
Route::get('/login',[LoginUserController::class,'create']);
Route::post('/login',[LoginUserController::class,'store']);
Route::post('/logout',[LoginUserController::class,'destroy']);
