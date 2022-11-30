<?php

use Illuminate\Http\Request;
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

//hiển thị login
Route::get('/login', function () {
   return view('login');
});
//hiển thị register
Route::get('/register', function () {
    echo '<h1> Trang đăng kí </h1>';
});
//xử lí login
Route::post('/xu-ly-login', function (Request $request) {

    // dd($request->all());  == in dữ liệu gửi lên
    $username = $request->username;
    $password = $request->password;
    echo $username . ' - ' . $password ;
});
Route::get('/xu-ly-register', function () {
    
});
//hiển thị form calculator
Route::get('/calculator', function(){
    return view('calculator');
});//xử lí
Route::post('/xu-ly-calculator',function(Request $request){

    // dd($request->all());== in dữ liệu gửi lên
    $product_description = $request->product_description;
    $list_price = $request->list_price;
    $discount_percent = $request->discount_percent;
    echo $product_description . ' - ' . $list_price . ' - ' . $discount_percent ;
    echo '<br>';
    $Discount_Amount = $list_price * $discount_percent * 0.1;
    echo $Discount_Amount;
});

