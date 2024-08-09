<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', [UserController::class,'index'])->name('user.index');
Route::post('/users/import', [UserController::class,'import'])->name('user.import');
Route::post('/users/import2', [UserController::class,'import2'])->name('user.import2');
Route::post('/users/store', [UserController::class,'store'])->name('user.store');
