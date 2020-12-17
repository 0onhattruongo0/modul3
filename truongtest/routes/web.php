<?php

use App\Http\Controllers\SessionController;
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
Route::get('/truong', function () {

    echo 'Hello World!';

});
Route::get('/truong/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});
Route::get('/login', function(){
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request){
    if($request->username=='admin' && $request->password=='admin'){
        return view('welcome_login');
    }else{
        return view('login_error');
    }

});
Route::get('/discount', function(){
    return view('discount');
});

Route::post('/discount', function(Illuminate\Http\Request $request){
    $description=$request->description;
    $price=$request->price;
    $percent=$request->Percent;
    $discountAmount = $price * $percent * 0.01;
    $discountPrice = $price - $discountAmount;
    return view('display_discount', compact('description','price','percent','discountAmount','discountPrice'));
});

Route::get('/tudien', function(){
    return view('tudien');
});
Route::post('/tudien', function(Illuminate\Http\Request $request){
    $array= array('Hello'=>'Xin chào','Name'=>'tên','Book'=>'Sách');
    $flag=0;
    foreach($array as $key=>$value){
        if($key==$request->search) {
            echo "Từ:" . $key ."<br>". "nghĩa là:" . $value;
            $flag = 1;
        }
    }
    if($flag==0){
        echo "Từ cần tìm ko có";
    }
});
Route::view('home','home');
Route::view('user','user');
Route::view('noaccess','noaccess');

Route::get('/session/get',[SessionController::class,'getSessiondata'])->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSessiondata'])->name('session.set');
Route::get('/session/remove',[SessionController::class,'deleteSessionData'])->name('session.delete');
