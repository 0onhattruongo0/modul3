<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
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

Route::get('/',[FormController::class,'index']);
Route::get('validate',[FormController::class,'checkValidation'])->name('form.submit');
Route::get('create',[PostController::class,'create' ]);
Route::post('store',[PostController::class,'store'])->name('store');

