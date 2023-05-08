<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProAdmin\ProAdminController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[UserController::class,'Home'])->name("Home");
Route::get('/shop',[UserController::class,'Shop'])->name("Shop");
Route::get('/detail',[UserController::class,'Detail'])->name("Detail");
Route::get('/cart',[UserController::class,'Cart'])->name("Cart");
Route::get('/checkout',[UserController::class,'checkout'])->name("Checkout");

Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('Dashboard');
Route::get('/addProduct',[AdminController::class,'AddProduct'])->name('AddProduct');


Route::get('/prodashboard',[ProAdminController::class,'Dashboard'])->name('ProDashboard');
Route::get('/category',[ProAdminController::class,'Category'])->name('Category');
Route::get('/userlist',[ProAdminController::class,'UserList'])->name('userlist');
Route::get('/ProductVerify',[ProAdminController::class,'Productverify'])->name('ProductVerify');

Route::get('/menu',[MenuController::class,'CreateMenu'])->name('createMenu');
Route::post('/menu',[MenuController::class,'StoreMenu'])->name('storeMenu');


