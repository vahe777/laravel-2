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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('allProducts');

Route::middleware(['role:admin'])->prefix('admin_panel')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::resource('product', 'ProductController');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
