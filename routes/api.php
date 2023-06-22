<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('smtp', [\App\Http\Controllers\API\SMTPController::class, 'send'])->middleware('cors');
Route::options('smtp', function () {
    return 'Hello World';
})->middleware('cors');
Route::get('smtp', function () {
    return 'Hello World';
})->middleware('cors');
