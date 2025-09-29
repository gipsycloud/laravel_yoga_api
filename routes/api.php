<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'role:2'])->group(function () {
    //Trainer


    Route::middleware(['auth:sanctum', 'role:1'])->group(function () {
        //Admin


    });

});

Route::middleware(['auth:sanctum', 'role:3'])->group(function () {
    //Student


});
