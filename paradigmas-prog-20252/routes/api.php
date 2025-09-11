<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::post('/users/create', [UserController::class, 'store']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/companies', [CompanyController::class, 'index']);
Route::post('/companies/create', [CompanyController::class, 'store']);
Route::delete('/companies/{id}', [CompanyController::class, 'destroy']);
Route::put('/companies/{id}', [CompanyController::class, 'update']);
Route::get('/companies/{id}', [CompanyController::class, 'show']);