<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Auth::routes();
Route::get('/', [CarController::class, 'index']);
Route::get('/create',[CarController::class, 'create_view']);
Route::post('/create',[CarController::class, 'create']);
Route::get('view/{id}',[CarController::class, 'show'])->where('id', '[0-9]+');
Route::get('{id}/edit',[CarController::class, 'edit']);
Route::put('{id}/edit',[CarController::class, 'update']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
