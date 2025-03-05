<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BurgerwebController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;


Route::get('/', [BurgerwebController::class, 'index'])->name('Home');



Route::get('/single_product', function () {
    return redirect('/');
});



Route::get('/single_product/{id}', [BurgerwebController::class, 'single_product'])->name('single_product');



Route::get('/about', function () {
    return view('about');
});



Route::get('/products', [BurgerwebController:: class, 'products'])->name('products');



Route::get('/products/{category}', [BurgerwebController::class, 'category'])->name('category');



Route::get('/cart', [CartController::class, 'cart'])->name('cart');



Route::post('/add_to_cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/add_to_cart', function () {
    redirect("/");
});



Route::post('/remove_from_cart', [CartController::class, 'remove_from_cart'])->name('remove_from_cart');
Route::get('/remove_from_cart', function () {
    redirect("/");
});



Route::post('/edit_product_quantity', [CartController::class, 'edit_product_quantity'])->name('edit_product_quantity');
Route::get('/edit_product_quantity', function () {
    redirect("/");
});



Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');



Route::post('/place_order', [CartController::class, 'place_order'])->name('place_order');



Route::get('/user_orders', [BurgerwebController::class, 'user_orders'])->name('user_orders');



Route::get('/user_order_details/{id}', [BurgerwebController::class, 'user_order_details'])->name('user_order_details');



Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');


Route::get('/list_products_admin', [AdminController::class, 'list_products_admin'])->name('list_products_admin');
Route::get('/add_products', [AdminController::class, 'add_products'])->name('add_products');
Route::post('/adding_product', [AdminController::class, 'adding_product'])->name('adding_product');
Route::get('/edit_product', [AdminController::class, 'edit_product'])->name('edit_product');
Route::get('/edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit_product');
Route::put('/edit_product/{id}', [AdminController::class, 'update_product'])->name('update_product');
Route::delete('/edit_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
