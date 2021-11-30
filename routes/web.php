<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\MemberController;


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

// Get data from database use Controller
Route::get('person', [PersonController::class, 'index']);


Route::get('employee', [EmployeeController::class, 'getData']);

// Route::view('login', 'login');
Route::POST('login-action', [LoginController::class, 'testRequest']);
Route::post('user-auth', [UserAuth::class, 'userLogin']);
Route::view('profile', 'profile');

// Login
Route::get('login', function() {
    if(session()->has('user')){
        return redirect('profile');
    }
    return view('login');
});

// Logout
Route::get('logout', function() {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});


// Show list
Route::get('list', [MemberController::class, 'show']);
Route::view('add', 'addMember');
Route::post('add', [MemberController::class, 'addData']);
Route::get('delete/{id}', [MemberController::class, 'delete']);
Route::get('edit/{id}', [MemberController::class, 'showData']);
Route::post('edit/{id}', [MemberController::class, 'update']);
Route::get('aggregate', [MemberController::class, 'operation']);

Route::get('show', [EmployeeController::class, 'show']);

// Check oneToOne
Route::get('/check', [EmployeeController::class, 'checkOneToOne']);

// Check oneToMany
Route::get('one-to-many', [MemberController::class, 'checkOneToMany']);

Route::get('fluent-string', [ViewController::class, 'fluentString']);

// Route Model Binding
Route::get('device/{key}', [DeviceController::class, 'index']);