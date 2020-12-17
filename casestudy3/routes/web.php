<?php

use App\Http\Controllers\ajaxController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TypeOfNewsController;
use App\Http\Controllers\UsersController;
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
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
//Route::middleware('auth')->prefix('admin')->group(function () {
Route::middleware('adminLogin')->prefix('admin')->group(function () {
//Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'categories'],function(){
        Route::get('/category',[CategoriesController::class,'index'])->name('categories.index');
        Route::post('/category',[CategoriesController::class,'addCategory'])->name('categories.add');
        Route::get('/edit/{id}',[CategoriesController::class,'getCategoryById'])->name('categories.edit');
        Route::post('/edit/{id}',[CategoriesController::class,'updateCategory'])->name('categories.update');
        Route::get('/category/{id}',[CategoriesController::class,'deleteCategory'])->name('categories.destroy');
    });
    Route::group(['prefix'=>'typeofnews'],function(){
        Route::get('/list',[TypeOfNewsController::class,'getlist'])->name('typeofnews.list');
        Route::get('/create',[TypeOfNewsController::class,'create'])->name('typeofnews.create');
        Route::post('/create',[TypeOfNewsController::class,'store'])->name('typeofnews.store');
        Route::get('/{id}/edit',[TypeOfNewsController::class,'edit'])->name('typeofnews.edit');
        Route::post('/{id}/edit',[TypeOfNewsController::class,'update'])->name('typeofnews.update');
        Route::get('/{id}/destroy',[TypeOfNewsController::class,'destroy'])->name('typeofnews.destroy');
    });
        Route::group(['prefix' => 'news'], function () {
            Route::get('/list', [NewsController::class, 'getlist'])->name('news.list');
            Route::get('/create', [NewsController::class, 'create'])->name('news.create');
            Route::post('/create', [NewsController::class, 'store'])->name('news.store');
            Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
            Route::post('/{id}/edit', [NewsController::class, 'update'])->name('news.update');
            Route::get('/{id}/destroy', [NewsController::class, 'destroy'])->name('news.destroy');
        });
    Route::middleware(['adminLoginRoles'])->group(function () {
        Route::group(['prefix' => 'users'], function () {
            Route::get('/list', [UsersController::class, 'getlist'])->name('users.list');
            Route::get('/create', [UsersController::class, 'create'])->name('users.create');
            Route::post('/create', [UsersController::class, 'store'])->name('users.store');
            Route::get('/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
            Route::post('/{id}/edit', [UsersController::class, 'update'])->name('users.update');
            Route::get('/{id}/destroy', [UsersController::class, 'destroy'])->name('users.destroy');
        });
    });

    Route::group(['prefix'=>'comments'],function() {
        Route::get('/destroy/{id}', [CommentsController::class,'destroy'])->name('comments.destroy');
    });
    Route::group(['prefix'=>'ajax'],function(){
        Route::get('typeofnews/{id}',[ajaxController::class ,'getTypeofnews']);
    });
});
