<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TypeOfNewsController;
use App\Http\Controllers\UsersController;
use App\Models\Commentss;
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
    return view('admin.master');
});
Route::get('/admin/login',[UsersController::class,'getLogin']);
Route::post('/admin/login',[UsersController::class,'postLogin'])->name('admin.login');


Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'category'],function(){
        Route::get('/list',[CategoryController::class,'getlist'])->name('category.list');
        Route::get('/create',[CategoryController::class,'create'])->name('category.create');
        Route::post('/create',[CategoryController::class,'store'])->name('category.store');
        Route::get('/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('/{id}/edit',[CategoryController::class,'update'])->name('category.update');
        Route::get('/{id}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');
    });
    Route::group(['prefix'=>'typeofnews'],function(){
        Route::get('/list',[TypeOfNewsController::class,'getlist'])->name('typeofnews.list');
        Route::get('/create',[TypeOfNewsController::class,'create'])->name('typeofnews.create');
        Route::post('/create',[TypeOfNewsController::class,'store'])->name('typeofnews.store');
        Route::get('/{id}/edit',[TypeOfNewsController::class,'edit'])->name('typeofnews.edit');
        Route::post('/{id}/edit',[TypeOfNewsController::class,'update'])->name('typeofnews.update');
        Route::get('/{id}/destroy',[TypeOfNewsController::class,'destroy'])->name('typeofnews.destroy');
    });
    Route::group(['prefix'=>'news'],function(){
        Route::get('/list',[NewsController::class,'getlist'])->name('news.list');
        Route::get('/create',[NewsController::class,'create'])->name('news.create');
        Route::post('/create',[NewsController::class,'store'])->name('news.store');
        Route::get('/{id}/edit',[NewsController::class,'edit'])->name('news.edit');
        Route::post('/{id}/edit',[NewsController::class,'update'])->name('news.update');
        Route::get('/{id}/destroy',[NewsController::class,'destroy'])->name('news.destroy');
    });

    Route::group(['prefix'=>'slide'],function(){
        Route::get('/list',[SlideController::class,'getlist'])->name('slide.list');
        Route::get('/create',[SlideController::class,'create'])->name('slide.create');
        Route::post('/create',[SlideController::class,'store'])->name('slide.store');
        Route::get('/{id}/edit',[SlideController::class,'edit'])->name('slide.edit');
        Route::post('/{id}/edit',[SlideController::class,'update'])->name('slide.update');
        Route::get('/{id}/destroy',[SlideController::class,'destroy'])->name('slide.destroy');
    });

    Route::group(['prefix'=>'users'],function(){
        Route::get('/list',[UsersController::class,'getlist'])->name('users.list');
        Route::get('/create',[UsersController::class,'create'])->name('users.create');
        Route::post('/create',[UsersController::class,'store'])->name('users.store');
        Route::get('/{id}/edit',[UsersController::class,'edit'])->name('users.edit');
        Route::post('/{id}/edit',[UsersController::class,'update'])->name('users.update');
        Route::get('/{id}/destroy',[UsersController::class,'destroy'])->name('users.destroy');
    });

    Route::group(['prefix'=>'comments'],function() {
        Route::get('/{id}/destroy', [CommentController::class,'destroy'])->name('comments.destroy');
    });
});
