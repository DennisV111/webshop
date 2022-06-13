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


// test van Dennis
Route::get('dennis/shop', [DennisController::class, 'index'])->name('dennis.index');


//onderstaande routes zijn een voorbeeld uit de CV-app (doen hier niks)

Route::get('persons/create', [PersonController::class, 'create'])->name('persons.create');

Route::post('persons', [PersonController::class, 'store'])->name('persons.store');

Route::get('persons/{person}', [PersonController::class, 'show'])->name('persons.show');

Route::get('persons/{person}/edit', [PersonController::class, 'edit'])->name('persons.edit');

Route::patch('persons/{person}', [PersonController::class, 'update'])->name('persons.update');

Route::delete('persons/{person}', [PersonController::class, 'destroy'])->name('persons.destroy');

//onderstaande routes zijn tijdelijke routes naar de blades

Route::get('shopping-cart', function() {
    return view('shopping-cart');
});
Route::get('users/login', function() {
    return view('users.login');
});
Route::get('users/signup', function() {
    return view('users.signup');
});
Route::get('frontend/index', function() {
    return view('frontend.index');
});
Route::get('frontend/app', function() {
    return view('frontend.app');
});
Route::get('frontend/body/featured', function() {
    return view('frontend.body.featured');
});
Route::get('frontend/body/footer', function() {
    return view('frontend.body.footer');
});
Route::get('frontend/body/header', function() {
    return view('frontend.body.header');
});
Route::get('frontend/book-details/detail', function() {
    return view('frontend.book_details.detail');
});

