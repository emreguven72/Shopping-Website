<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::view('/signin' , 'sign-in')->name('signin');
    Route::post('/signin' , [AuthController::class, 'signin']);

    Route::view('/signup' , 'sign-up')->name('signup');
    Route::post('/signup' , [AuthController::class, 'signup']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::view('/' , 'index')->name('home');
    Route::get('/signout' , [AuthController::class, 'signout'])->name('signout');
    Route::get('/urunler/{category_name}' , [CategoryController::class, 'index'])->name('products');
    Route::get('/sepet' , [CartController::class, 'showCart'])->name('showCart');
    Route::get('/sepet/ekle/{product_id}' , [CartController::class, 'addToCart'])->name('addToCart');
});
