<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
//use App\Http\Controllers\StatusController;
//use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
//use App\Http\Controllers\ConfirmationController;

//use Illuminate\Support\Facades\DB;

use Gloudemans\Shoppingcart\Facades\Cart;

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

//admin routes

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

Route::resource('admin/items', ItemController::class)->names('admin.items');

Route::resource('admin/categories', CategoryController::class)->names('admin.categories');

Route::resource('admin/product_stock', ProductStockController::class)->names('admin.product_stock');

// end of admin routes

Route::get('users/login', function () {
    return view('users.login');
});
Route::get('users/signup', function () {
    return view('users.signup');
});

// routes For Frontend Controller

Route::get('frontend/category', [CategoryController::class, 'showCategoryPage'])->name('itemcategory.showCategoryPage');

Route::get('frontend/shop-page', [ItemController::class, 'showItemPage'])->name('item.showItemPage');

Route::get('shopping-cart', [OrderItemController::class, 'index'])->name('orderItem.index');

Route::post('shopping-cart', [OrderItemController::class, 'store'])->name('orderItem.store');

Route::delete('shopping-cart/{item}', [OrderItemController::class, 'destroy'])->name('orderItem.destroy');

Route::get('frontend/shop-page/{id}', [ItemController::class, 'showDetailPage'])->name('item.showDetailPage');

Route::patch('frontend/shop-page/{id}', [ItemController::class, 'updateQuantity'])->name('item.updateQuantity');

Route::get('/', [HomeController::class, 'featuredItems'])->name('home.featuredItems');

Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');

Route::post('checkout', [UserController::class, 'store'])->name('user.store');

Route::post('order', [OrderController::class, 'store'])->name('order.store');

Route::post('search', [ItemController::class, 'findBooks'])->name('item.findBooks');

Route::get('/thankyou', [OrderController::class, 'index'])->name('order.index');

Route::get('empty', function () {
    Cart::destroy();
});