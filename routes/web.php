<?php

use App\Http\Controllers\AboutConotroller;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BannerImagesController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactInfoController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Localization;

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

Route::redirect('/admin', '/admin/home');

Route::group(['prefix' => 'admin'], function () {

    Auth::routes([
        'register' => false,
        'reset' => false,
        'verify' => false
    ]);

    Route::get('/home', [HomeController::class, 'index'])->name('admin.home');

    Route::resource('home/products', ProductsController::class);

    Route::resource('home/categories', CategoriesController::class, [
        'only' => ['index', 'create', 'store', 'destroy']
    ]);

    Route::resource('home/bannerImages', BannerImagesController::class, [
        'only' => ['index', 'create', 'store', 'destroy']
    ]);

    Route::resource('home/contactInfo', contactInfoController::class, [
        'only' => ['index', 'create', 'store']
    ]);

    Route::resource('home/about', AboutConotroller::class, [
        'only' => ['index', 'create', 'store']
    ]);

});


// Route::get('/test', function() {
//     return view('test');
// });

Route::get('test', function() {
    return view('test');
});

Route::redirect('/', '/ka');

Route::middleware([Localization::class])->group(function () {
    Route::group(['prefix' => '{language}'], function(){
        Route::get('/', [AppController::class, 'index'])->name('index');
        Route::get('/contact', [AppController::class, 'contact'])->name('contact');
        Route::get('/products', [AppController::class, 'products'])->name('index.products');
    
        Route::get('/product/{id}', [AppController::class, 'productReview'])->name('index.product');
        Route::get('/about', [AppController::class, 'about'])->name('about');
    });     
});








