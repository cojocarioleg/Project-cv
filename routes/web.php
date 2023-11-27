<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminColorsController;
use App\Http\Controllers\Admin\AdminOffersController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\AdminSizesController;
use App\Http\Controllers\Admin\AdminTypesController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\UserController;
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

Route::get('/', [MainController::class, 'index'])->name('admin.index');
Route::resource('/categories', AdminCategoryController::class);
Route::resource('/colors', AdminColorsController::class);
Route::resource('/offers', AdminOffersController::class);
Route::resource('/sizes', AdminSizesController::class);
Route::resource('/types', AdminTypesController::class);
Route::resource('/products', AdminProductsController::class);


Route::get('/register', [UserController::class, 'create'] )->name('register.create');

Route::post('/register', [UserController::class, 'store'] )->name('register.store');
