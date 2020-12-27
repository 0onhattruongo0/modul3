<?php

use App\Http\Controllers\NhanVienController;
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
Route::get('/nhanvien',[NhanVienController::class,'nhanvien'])->name('nhanvien.list');
Route::get('/themnhanvien',[NhanVienController::class,'showaddform'])->name('nhanvien.addform');
Route::post('/themnhanvien',[NhanVienController::class,'addnhanvien'])->name('nhanvien.add');
Route::get('/{id}/suanhanvien',[NhanVienController::class,'suanhanvienform'])->name('nhanvienform.edit');
Route::post('/{id}/suanhanvien',[NhanVienController::class,'suanhanvien'])->name('nhanvien.edit');
Route::get('/{id}/xoanhanvien',[NhanVienController::class,'xoanhanvien'])->name('nhanvien.delete');


