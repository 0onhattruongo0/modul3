<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('welcome');
});
Route::group(['prefix'=>'users'],function(){
    Route::get('index',[UsersController::class,'index'])->name('users.index');
    Route::get('/create',[UsersController::class,'create'])->name('users.create');
    Route::post('/create',[UsersController::class,'store'])->name(('users.store'));
    Route::get('/{id}/edit',[UsersController::class,'edit'])->name('users.edit');
    Route::post('/{id}/edit',[UsersController::class,'update'])->name('users.update');
    Route::get('/{id}/destroy',[UsersController::class,'destroy'])->name('users.destroy');
    Route::get('/search',[UsersController::class,'getsearch'])->name('users.getsearch');
});
