<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\Sessionscontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [Sessionscontroller::class, 'create']);
Route::post('/login', [Sessionscontroller::class, 'store']);
