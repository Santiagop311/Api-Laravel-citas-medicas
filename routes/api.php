<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TypeAppointmentsController;



Route::apiResource('users', UserController::class);

Route::apiResource('appointments',TypeAppointmentsController::class);


Route::get('/prueba', function(){
    return 'hola, este e suna prieba';
});
