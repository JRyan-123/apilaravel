<?php

use App\Http\Controllers\Api\V1\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
   return 'sample';
});

Route::apiResource('students', StudentController::class);
require __DIR__.'/auth.php';