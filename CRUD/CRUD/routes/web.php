<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::prefix('products')->group(function () {
    Route::get('/index',[ProductController::class,'index'])->name('products.index');
    Route::get('/create',[ProductController::class,'create'])->name('products.create');
    Route::post('/add',[ProductController::class,'add'])->name('products.add');
    Route::get('/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::put('/{id}/edit',[ProductController::class,'update'])->name('products.update');
    Route::delete('/{id}',[ProductController::class,'destroy'])->name('products.destroy');
});
