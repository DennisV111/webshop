<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DennisController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

//tijdelijke route van Anas

// Route::get('/', [IndexController::class, 'index']);

// definitieve routes

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('items', [ItemController::class, 'index'])->name('items.index');

Route::get('frontend/category', [CategoryController::class, 'showCategoryPage'])->name('itemcategory.index');

Route::get('frontend/shop-page', [DennisController::class, 'index'])->name('dennis.index');

//admin routes

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

Route::resource('admin/items', ItemController::class)->names('admin.items');

Route::resource('admin/categories', CategoryController::class)->names('admin.categories');

Route::resource('admin/product_stock', ProductStockController::class)->names('admin.product_stock');

// end of admin routes

// Route::get('dennis/shop', [DennisController::class, 'index'])->name('dennis.index');

//onderstaande routes zijn tijdelijke routes naar de blades

// Route::get('shopping-cart', function () {
//     return view('shopping-cart');
// });
Route::get('users/login', function () {
    return view('users.login');
});
Route::get('users/signup', function () {
    return view('users.signup');
});
Route::get('frontend/index', function () {
    return view('frontend.index');
});
Route::get('frontend/app', function () {
    return view('frontend.app');
});

// Route::get('frontend/checkout', function () {
//     return view('frontend.checkout');
// });


Route::get('frontend/body/footer', function () {
    return view('frontend.body.footer');
});
Route::get('frontend/body/header', function () {
    return view('frontend.body.header');
});



// Used Routes For Frontend Controller

Route::get('frontend/category', [CategoryController::class, 'showCategoryPage'])->name('itemcategory.showCategoryPage');

Route::get('frontend/shop-page', [ItemController::class, 'showItemPage'])->name('item.showItemPage');

Route::get('shopping-cart', [OrderItemController::class, 'index'])->name('orderItem.index');

Route::post('shopping-cart', [OrderItemController::class, 'store'])->name('orderItem.store');

Route::delete('shopping-cart/{item}', [OrderItemController::class, 'destroy'])->name('orderItem.destroy');

// Route::delete('shopping-cart/{item}', [OrderItemController::class, 'update'])->name('orderItem.update');

Route::get('frontend/shop-page/{id}', [ItemController::class, 'showDetailPage'])->name('item.showDetailPage');

Route::get('/', [HomeController::class, 'featuredItems'])->name('home.featuredItems');

Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');

Route::post('checkout', [UserController::class, 'store'])->name('user.store');

Route::post('order', [OrderController::class, 'store'])->name('order.store');

// Route::get('/', [HomeController::class, 'search'])->name('home.search');

Route::get('empty', function () {
    Cart::destroy();
});


// Route::get('basket', [ItemController::class, 'basket']);
// Route::get('add-to-basket/{id}', [ItemController::class, 'addToCart']);

// Route::patch('update-basket', 'ItemsController@updateCart');
// Route::delete('remove-from-basket', 'ItemsController@remove');
