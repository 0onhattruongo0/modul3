<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/productlist',[ProductController::class,'productlist'])->name('productlist');
Route::get('/createproduct',[ProductController::class,'formCreateProduct'])->name('formCreateProduct');
Route::post('/createproduct',[ProductController::class,'createProduct'])->name('CreateProduct');
Route::get('/editproduct/{id}',[ProductController::class,'formEditProduct'])->name('formEditProduct');
Route::post('/editproduct/{id}',[ProductController::class,'EditProduct'])->name('EditProduct');
Route::get('/active',[ProductController::class,'active'])->name('active');
Route::get('/unactive',[ProductController::class,'unactive'])->name('unactive');
