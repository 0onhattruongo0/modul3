<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\customerController;


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


Route::prefix('admin')->group(function (){
    Route::prefix('user')->group(function (){
        Route::get('index', [UserController::class, 'index'])->name('user.index');
        Route::get('/{id}/edit', [UserController::class,'edit'])->name('user.edit');
        Route::get('/{id}/delete', [UserController::class,'delete'])->name('user.delete');
        Route::get('create', [UserController::class,'create'])->name('user.create');
    });

});

//Route::resource('user', customerController::class);





