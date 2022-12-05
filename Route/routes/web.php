<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Validation\Rules\In;

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



//lấy toàn bộ sp
Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']) ->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/', [ProductController::class, 'stote'])->name('products.store');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


//     //hiển thị sản phẩm
//     Route::get('/', function () {
//         return 'hiển thị sp';
//     })->name('products.index');
//     //thêm mới sản phẩm
//     Route::get('/create', function () {
//         return 'thêm mới sp';
//     })->name('products.create');
//     //xử lí thêm mới
//     Route::post('/', function () {
//     })->name('products.store');
//     //xem chi tiết sản phẩm theo id
//     Route::get('/{id}', function ($id) {
//         return 'xem chi tiết sp ' . $id;
//     })->name('products.show');
//     //cập nhật sản phẩm theo id
//     Route::put('/{id}', function ($id) {
//         return 'cập nhật sẩn phẩm' . $id;
//     })->name('products.update');
//     //form sửa
//     Route::get('/{id}/edit', function ($id) {
//         return 'xóa sản phẩm' . ' ' . $id;
//     })->name('products.destroy');
//     //xóa theo id
//     Route::delete('/{id}', function ($id) {
//         return 'xóa sp' . $id;
//     })->name('products.edit');
 });
// Route::get('test_route', function () {
//     echo '<br>' . route('products.index');
//     echo '<br>' . route('products.create');
//     echo '<br>' . route('products.store');

//     echo '<br>' . route('products.index', 1);
//     echo '<br>' . route('products.show', 1);
//     echo '<br>' . route('products.update', 1);
//     echo '<br>' . route('products.destroy', 1);
// });
Route::resource('photos',PhotoController::class);


Route::get('link_normal',function(){
    echo 'link_normal';
});
Route::get('link_vip/{age}',function($age){
    echo 'link_vip';
})->middleware('checkAge');

//////////////////check email
Route::get('/',function(){
    return view('index');
});
Route::post('/check_email',[UserController::class,'validationEmail'])->name('checkemail');




//////////////////máy tính cá nhân
Route::get('/calculator',function(){
    return view('calculator');
});
Route::post('/check',[CalculatorController::class,'CalculatorController'])->name('Calculator');