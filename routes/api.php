<?php

use App\Http\Controllers\JWTController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'api'],function($router){
    Route::controller(JWTController::class)->group(function(){
        Route::post('register', 'register');
        Route::post('login', 'login');
        Route::post('logout', 'logout');
        Route::post('refresh', 'refresh');
        Route::post('profile', 'profile');
    });
});