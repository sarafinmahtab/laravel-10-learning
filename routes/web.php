<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('wife', function () {
    return view('farah');
});

Route::view('restrict', 'name_length_restrict');

Route::view('login', 'login_form');
Route::view('register', 'register_form');
Route::post('result', [EntryController::class, 'submit'])->middleware('nameLengthCheck');

Route::get('users', [UserController::class, 'index']);
Route::get('employees', [EmployeeController::class, 'getAll']);
