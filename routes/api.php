<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\CheckIfRequestIsAjax;
use App\Models\Images;
use App\Models\Products;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware([CheckIfRequestIsAjax::class])->group(function () {
    Route::get('productsJson', [AppController::class, 'productsJson']);
    Route::get('getSubcategoriesJson', [AppController::class, 'getSubcategoriesJson']); 
    Route::get('/getProduct/{id}', [CartController::class, 'getProduct']);
});


// Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
// Route::patch('/update-cart', [CartController::class, 'update'])->name('cart.update');
// Route::delete('/remove-from-cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
// Route::get('/getCart', [CartController::class, 'getCart'])->name('cart.get'); 




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
