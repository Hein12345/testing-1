<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/api/users',UserController::class);
Route::get('/api/users',[UserController::class,'index']);
Route::post('/api/users',[UserController::class,'store']);