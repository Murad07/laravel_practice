<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\dummyApi;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
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

Route::get('data', [dummyApi::class, 'getData']);

// data from database
Route::get('list', [CustomerController::class, 'list']);

// Post api
Route::post('add', [DeviceController::class, 'add']);

// Put api
Route::put('update', [DeviceController::class, 'update']);

// Delete api
Route::delete('delete-device/{id}', [DeviceController::class, 'delete']);

// Search api
Route::get('search/{key}', [DeviceController::class, 'search']);

// Api Validation
Route::post('save', [DeviceController::class, 'testData']);

// Api with resource
Route::apiResource('user', UserController::class);

// File Upload
Route::post('upload',[FileController::class,'upload']);
