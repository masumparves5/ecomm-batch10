<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopgridController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\CustomerController;


Route::get('/',[ShopgridController::class,'index'])->name('home');
Route::get('/product-category',[ShopgridController::class,'category'])->name('product.category');
Route::get('/product-detail',[ShopgridController::class,'product'])->name('product.detail');
Route::get('/cart-view',[CardController::class,'index'])->name('cart.view');
Route::get('/checkout',[CheckController::class,'index'])->name('checkout');
Route::get('/customer/login',[CustomerController::class,'login'])->name('customer.login');
Route::get('/customer/register',[CustomerController::class,'register'])->name('customer.register');


