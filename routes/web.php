<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// About page Route
Route::get('/about', function () {
    return view('about');
});

Route::view('/contact', 'contact');

Route::get('/datapass/{message}', function ($message) {
    return view('datapass', ['message'=>$message]);
});

// With Controller
// Route::get('path', [controller::class, 'function'])
Route::get('users/{user}', [User::class, 'index']);

// View from Controller
Route::get('vc/{name}', [ViewController::class, 'loadView']);

Route::post('customer', [CustomerController::class, 'getData']);
Route::view('login', 'customer');

Route::view('noaccess', 'noaccess');

Route::get('person', [PersonController::class, 'index']);
