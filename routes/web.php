<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\addProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\checkoutController;


Route::get('/shoppingcart', function () {
    return view('shoppingcart');
});

// Route::get('/checkout', function () {
//     return view('checkout');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/addProduct', function () {
    return view('addProduct');
});



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', [ProductController::class, 'loadHomeProducts']);
Route::get('/all', [ProductController::class, 'loadAllProducts']);
Route::get('/sale', [ProductController::class, 'loadAllSaleProducts']);
Route::get('/category', [ProductController::class, 'loadCategory']);
Route::get('/maincategory', [ProductController::class, 'women']);
Route::get('/singleProduct', [ProductController::class, 'SingleProd']);
Route::get('/singleProductSale', [ProductController::class, 'SingleProdSale']);
Route::get('/wishlist', [WishController::class, 'addtoWishlist']);
Route::get('/shoppingcart', [CartController::class, 'addCart']);

Route::get('/checkout', [checkoutController::class, 'Check']);

Route::post('/login', [registerController::class, 'loginUser']);
Route::post('/register', [registerController::class,'addData']);
Route::post('/addProduct', [addProductController::class,'addProd']);

Route::post('/add-wishlist', [WishController::class, "addToWish"]);


Route::post('/add-to-cart', [CartController::class, "addToCart"]);
Route::post('/del-from-cart', [CartController::class, "delfromCart"]);

Route::post('/del-from-wish', [WishController::class, "delfromWish"]);



?>