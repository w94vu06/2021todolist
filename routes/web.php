<?php

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

Route::get('/',[\App\Http\Controllers\TodoController::class,'index'])->name('index');
Route::get('/create',[\App\Http\Controllers\TodoController::class,'create'])->name('create');
Route::get('/store',[\App\Http\Controllers\TodoController::class,'store'])->name('store');
Route::get('/store',[\App\Http\Controllers\TodoController::class,'delete'])->name('delete');
