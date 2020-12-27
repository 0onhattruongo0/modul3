<?php

use App\Http\Controllers\StaffController;
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
Route::get('liststaff',[StaffController::class,'getStaff'])->name('liststaff');
Route::get('addstaff',[StaffController::class,'formAddStaff'])->name('formAddStaff');
Route::post('addstaff',[StaffController::class,'AddStaff'])->name('Addstaff');
Route::get('/editstaff/{id}',[StaffController::class,'formEditStaff'])->name('formEdit');
Route::post('/editstaff/{id}',[StaffController::class,'EditStaff'])->name('EditStaff');
Route::get('deytroy/{id}',[StaffController::class,'destroyStaff'])->name('deleteStaff');
Route::get('/search',[StaffController::class,'searchstaff'])->name('searchstaff');
