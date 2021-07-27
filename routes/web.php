<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use \App\Http\Livewire\HomeComponent;
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

//Route::redirect('/', '/ka');
//
//
//Route::group(['prefix' => '{language}'], function(){
//
//});


    Route::get('/contact', [ContactController::class, 'index'])->name('contact');

    Route::get('/', function () {
        return view('app');
    })->name("home");

    Route::get('/products', function () {
        return view('products');
    })->name("products");

    Route::get('/product', function () {
        return view('product_view');
    })->name('product');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/home/products', App\Http\Controllers\ProductsController::class);

//Route::get("/", HomeComponent::class);