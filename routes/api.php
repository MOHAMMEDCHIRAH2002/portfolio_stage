<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

//Route::get('/user', function (Request $request) {
    //return $request->user();
//})->middleware('auth:sanctum');

//project routes
Route::get('/projects', [ProjectController::class, 'index']);
//Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::post('/projects/addproject', [ProjectController::class, 'addprojet']);
//Route::put('/projects/{id}', [ProjectController::class, 'update']);
//Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);