<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\LoginController;
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
    if (!session()->has('name'))
    {
        return redirect('login');
    }
    return view('welcome');
});

Route::get('wife', function () {
    return view('farah');
});

Route::view('restrict', 'name_length_restrict');

Route::get('login', function() {
    if (session()->has('name'))
    {
        return redirect('/');
    }
    return view('login_form');
});
Route::view('register', 'register_form');
Route::post('login_result', [LoginController::class, 'submit']);
Route::post('entry_result', [EntryController::class, 'submit'])->middleware('nameLengthCheck');
Route::get('logout', function() {
    if (session()->has('name'))
    {
        session()->pull('name', null);
    }
    return redirect('login');
});

Route::get('users', [UserController::class, 'index']);
Route::get('employees', [EmployeeController::class, 'getAll']);
