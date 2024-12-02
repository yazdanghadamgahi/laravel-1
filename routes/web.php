<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);
//auth
Route::get('/register',[RegisterUserController::class,'create']);
Route::post('/register',[RegisterUserController::class,'store']);

//*****************************************************************************

//Route::resource('jobs', JobController::class,[
//    'only' => ['index', 'show']
//]);

//Route::resource('jobs', JobController::class,[
//    'except' => ['create', 'store']
//]);

//Route::controller(JobController::class)->group(function () {
//    Route::prefix('/jobs')->group(function () {
//        Route::get('','index');
//        Route::get('/create','create');
//        Route::get('/{job:id}','show');
//        Route::get('/{job:id}/edit','edit');
//        Route::post('/','store');
//        Route::patch('/{job:id}','update');
//        Route::delete('/{job:id}','destroy');
//    });
//});

