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

Route::get('frontend/category', [CategoryController::class, 'showCategoryPage'])->name('itemcategory.index');

Route::get('frontend/shop-page', [DennisController::class, 'index'])->name('dennis.index');

//admin routes

Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

Route::resource('admin/items', ItemController::class)->names('admin.items');

Route::resource('admin/categories', CategoryController::class)->names('admin.categories');

// end of admin routes

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
Route::get('frontend/category', function() {
    return view('frontend.category');
});
Route::get('frontend/shop-page', function() {
    return view('frontend.shop-page');
});
Route::get('frontend/body/featured', function() {
    return view('frontend.body.featured');
});
Route::get('frontend/body/footer', function () {
    return view('frontend.body.footer');
});
Route::get('frontend/body/header', function () {
    return view('frontend.body.header');
});
Route::get('frontend/book-details/detail', function () {
    return view('frontend.book_details.detail');
});


//Frontend Item Details

// Route::get('frontend/category', [ItemCategoryController::class, 'categoryPagination'])->name('itemCategory.categoryPagination');


// Route::get('frontend/category', [ItemCategoryController::class, 'categoryPagination'])->name('category.categoryPagination');