<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\HomeController;
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



Route::prefix('admin')->group(function () {
    Route::prefix('customers')->group(function () {
        Route::get('/index',[CustomersController::class,'index'])->name('customer.index');
        Route::get('/create',[CustomersController::class,'create'])->name('customer.create');
        Route::post('/create',[CustomersController::class,'store'])->name('customer.store');
        Route::get('/{id}/destroy',[CustomersController::class,'destroy'])->name('customer.destroy');
        Route::get('/{id}/edit',[CustomersController::class,'edit'])->name('customer.edit');
        Route::post('/{id}/edit',[CustomersController::class,'update'])->name('customer.update');

    });
});

Route::get('/',[HomeController::class,'index'])->name('cart.index');

Route::get('/cart',[CartController::class,'index'])->name('cart.index');

Route::get('/add-to-cart/{id}', [CartController::class,'addToCart'])->name('cart.addToCart');
Route::get('/remove-to-cart/{id}', [CartController::class,'removeProductIntoCart'])->name('cart.removeProductIntoCart');
Route::post('/update-to-cart/{id}', [CartController::class,'updateProductIntoCart'])->name('cart.updateProductIntoCart');
