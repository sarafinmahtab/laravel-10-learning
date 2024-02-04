<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntryController;

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

Route::post('entry', [EntryController::class, 'submit'])->middleware('nameLengthCheck');
Route::view('login', 'entry');

Route::view('restrict', 'name_length_restrict');
