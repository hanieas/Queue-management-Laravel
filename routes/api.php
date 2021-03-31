<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReserveController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('guest:api')->group(function () {

   Route::post('login', [AuthController::class, 'login'])->name('login');

});

Route::middleware('auth:api')->group(function () {

   Route::resource('reserves', ReserveController::class);

});
