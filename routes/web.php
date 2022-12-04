<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessorController;
use App\Http\Controllers\PassportAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('register', [PassportAuthController::class, 'register'])->name('register');
Route::post('login', [PassportAuthController::class, 'login'])->name('login');

Route::get('register', [PassportAuthController::class, 'registerView']);
Route::get('login', [PassportAuthController::class, 'loginView']);

Route::get('/home', [LessorController::class, 'index']);
Route::get('/create', [LessorController::class, 'create']);
Route::get('/estates/edit/{id}', [EstateController::class, 'edit']);
Route::post('/store', [EstateController::class, 'store'])->name('estates.store');
Route::post('/update', [EstateController::class, 'update'])->name('estates.update');
Route::post('/delete/{id}', [EstateController::class, 'delete'])->name('estates.delete');

Route::post('logout', function(){
    Auth::logout();
    return redirect('/');
})->name('logout');




