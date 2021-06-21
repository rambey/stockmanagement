<?php

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

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/** category url */
Route::resource('categories', CategoryController::class);
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('/categories/{category}/delete', [CategoryController::class, 'destroy'])->name('categories.delete');
Route::get('/categories/{category}/detail', [CategoryController::class, 'show'])->name('categories.detail');

/** brands url */
Route::resource('brands', BrandController::class);
Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');
Route::get('/brands/{brand}/delete', [BrandController::class, 'destroy'])->name('brands.delete');
Route::get('/brands/{brand}/detail', [BrandController::class, 'show'])->name('brands.detail');

/** Products url */

Route::resource('products', ProductController::class);

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/{product}/delete', [ProductController::class, 'destroy'])->name('products.delete');
Route::get('/products/{product}/detail', [ProductController::class, 'show'])->name('products.detail');

Route::get('products', [ProductController::class, 'search'])->name('products.search');

