<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
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

Route::name('home')->get('/', [HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    
    // get
    Route::name('products.show')->get('/{merchant}/{product}', [ProductController::class, 'show']);

    // resource
    Route::resource('cart', CartController::class);
    Route::resource('wishlist', WishlistController::class);
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
