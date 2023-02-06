<?php

use App\Http\Controllers\AboutConotroller;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BannerImagesController;
use App\Http\Controllers\CartController;
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

    Auth::routes();

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

    // Route::resource('home/about', AboutConotroller::class, [
    //     'only' => ['index', 'create', 'store']
    // ]);

});

Route::get('/getSubcategories', [Appcontroller::class, 'getSubcategoriesByCategory']);

Route::redirect('/', '/ka')->name('/');



Route::group(['prefix' => '{language}'], function(){

    Route::get('/', [AppController::class, 'index'])->name('index')->middleware([Localization::class]);
    Route::get('/contact', [AppController::class, 'contact'])->name('contact')->middleware([Localization::class]);
    Route::get('/products', [AppController::class, 'products'])->name('index.products')->middleware([Localization::class]);

    Route::get('/product/{id}', [AppController::class, 'productReview'])->name('index.product')->middleware([Localization::class]);
    Route::get('/about', [AppController::class, 'about'])->name('about')->middleware([Localization::class]);

});



// Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::patch('/update-cart', [CartController::class, 'update'])->name('cart.update');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('cart.remove');

Route::post("/storeFeedback", [Appcontroller::class, 'storeFeedback']);



