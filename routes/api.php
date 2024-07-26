<?php

use App\Http\Controllers\Api\V1\{
    CalendarController,
    StudentController,
    PaeController,
    PqsController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::apiResource('pae', PaeController::class);
    Route::apiResource('student', StudentController::class);
    Route::apiResource('pqs', PqsController::class);
    Route::apiResource('calendar', CalendarController::class);
});
