<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DennisController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemStockController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;

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


Route::resource('admin/items', ItemController::class)->names('admin.items');

// test van Dennis
// Route::get('dennis/shop', [DennisController::class, 'index'])->name('dennis.index');

//onderstaande routes zijn tijdelijke routes naar de blades

Route::get('shopping-cart', function () {
    return view('shopping-cart');
});
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


Route::get('frontend/body/footer', function () {
    return view('frontend.body.footer');
});
Route::get('frontend/body/header', function () {
    return view('frontend.body.header');
});



// Used Routes For Frontend Controller

Route::get('frontend/category', [ItemCategoryController::class, 'showCategoryPage'])->name('itemcategory.showCategoryPage');

Route::get('frontend/shop-page', [ItemController::class, 'showItemPage'])->name('item.showItemPage');

Route::get('frontend/shop-page/{detail}', [ItemController::class, 'showDetailPage'])->name('item.showDetailPage');

Route::get('/', [HomeController::class, 'featuredItems'])->name('home.featuredItems');


Route::get('basket', [ItemController::class, 'basket']);
Route::get('add-to-basket/{id}', [ItemController::class, 'addToCart']);

Route::patch('update-basket', 'ItemsController@updateCart');
Route::delete('remove-from-basket', 'ItemsController@remove');