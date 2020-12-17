<?php

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

Route::get('/', function () {
    echo "<h2>This is Home page</h2>";
});
Route::get('/about', function (){
    echo "<h2>This is About page</h2>";
});
Route::get('contact',function (){
    echo "<h2>This is contact page</h2>";
});
Route::get('/user', function (){
    return view('user', ['Name'=>'Masul Alam']);
});
Route::get('user/{name}', function ($Name){
   echo "<h2>UseName is $Name</h2>";
});
Route::get('use-name/{name?}', function ($name='Shohen'){
    echo "<h2>UseName is $name</h2>";
});
Route::get('/',[HomeController::class,'index']);
