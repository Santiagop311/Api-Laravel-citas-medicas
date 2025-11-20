<?php

use App\Services\QuotaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TypeAppointmentsController;
use Illuminate\Support\Facades\Auth;


Route::middleware('auth:api')->post('/logout', function (Request $request) {
    // Invalida el token actual del usuario
    Auth::logout();

    // Si estás usando Laravel Sanctum o Passport, también podrías revocar el token explícitamente:
    // $request->user()->currentAccessToken()->delete();

    return response()->json([
        'message' => 'Sesión cerrada correctamente'
    ]);
});

//login
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (! $token = Auth::attempt($credentials)) {
        return response()->json(['error' => 'Credenciales inválidas'], 401);
    }


    $user = Auth::user();
    return response()->json([
        'token' => $token,
        'user' => [
            'id'    => $user->id,
            'name'  => $user->name,
            'email' => $user->email,
        ]
    ]);});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return response()->json(Auth::user());
});

Route::apiResource('users', UserController::class);

Route::apiResource('appointments',TypeAppointmentsController::class);

Route::apiResource('affiliates', \App\Http\Controllers\AffiliateController::class);
Route::apiResource('quotas', \App\Http\Controllers\QuotasController::class);


Route::get('/prueba', function(){
    return 'hola, este e suna prieba';
});
