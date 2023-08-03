<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;
use \App\Http\Controllers\CategorieController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\LoginController;
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
Route:: get ('/products',[
    productcontroller::class,
    'index'
]);
Route:: get ('/products/{id}',[
    productcontroller::class,
    'detail'
]);
Route:: get ('/post',[
    PostsController::class,
    'index'
]);

//Route::get('/foods', [FoodsController::class,'index']);
//Route::get('/foods/create', [FoodsController::class, 'create']);
//Route::get('/foods/create', [FoodsController::class, 'create']);
//    ->name('foods.create');
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::resource('user', UserController::class);

Route::middleware('auth')->group(function () {
    Route::resource('foods', FoodsController::class);
    Route::resource('categories', CategorieController::class);
    //Route::resource('user', UserController::class);
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard'); // Đặt tên route là "user.dashboard"
});
