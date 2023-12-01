<?php

use App\Http\Controllers\Admin\AboutsController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminColorsController;
use App\Http\Controllers\Admin\AdminContactsController;
use App\Http\Controllers\Admin\AdminOffersController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\AdminSizesController;
use App\Http\Controllers\Admin\AdminTypesController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\AdvantagesController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/colors', AdminColorsController::class);
    Route::resource('/offers', AdminOffersController::class);
    Route::resource('/sizes', AdminSizesController::class);
    Route::resource('/types', AdminTypesController::class);
    Route::resource('/products', AdminProductsController::class);
    Route::resource('/networks', NetworkController::class);
    Route::resource('/advantages', AdvantagesController::class);
    Route::resource('/abouts', AboutsController::class);
    Route::resource('/contacts', AdminContactsController::class);

});

Route::middleware('guest')->group(function(){
    Route::get('/register', [UserController::class, 'create'] )->name('register.create');
    Route::post('/register', [UserController::class, 'store'] )->name('register.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Web Site Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shopCategory/{category}', [CatagoryController::class, 'index'])->name('shopCategory');



