<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::patch('tasks/{tasks}/complete', [TaskController::class])
Route::apiResource('tasks', TaskController::class);
