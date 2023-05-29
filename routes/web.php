<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShoeController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\StatisticsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/home', function () {
//     return view('FrontEnd.home');
Route::get('/shoes', [ShoeController::class, 'index'])->name('shoes.index');

Route::get('/shoes/create', [ShoeController::class, 'create'])->name('shoes.create');
Route::post('/shoes', [ShoeController::class, 'store'])->name('shoes.store');
Route::get('/shoes/{shoe}/edit', [ShoeController::class, 'edit'])->name('shoes.edit');
Route::put('/shoes/{shoe}', [ShoeController::class, 'update'])->name('shoes.update');
Route::delete('/shoes/{shoe}', [ShoeController::class, 'destroy'])->name('shoes.destroy');

Route::get('/shoes/{shoe}', [ShoeController::class, 'show'])->name('shoes.show');
Route::get('/men', [ShoeController::class, 'men'])->name('shoes.men');
Route::get('/women', [ShoeController::class, 'women'])->name('shoes.women');
Route::get('/about', [ShoeController::class, 'about'])->name('shoes.about');
Route::get('/contactUs', [ShoeController::class, 'contactUs'])->name('shoes.contactUs');
Route::get('/', [ShoeController::class, 'home'])->name('house');


//cart controller 


// //add to cart
// // Add to cart
// Route::post('/cart/add/{shoe}', [CartController::class, 'addToCart'])->name('cart.add');

// // Show cart
// Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
// //delete item from the card
// Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//user crud routes , edit update index
Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

//admin route 

Route::get('admin/home',[HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/commands', [CommandController::class, 'index'])->name('admin.commands.index')->middleware('is_admin');
//shoe controller 
Route::get('/admin/men', [ShoeController::class, 'men'])->name('admin.men')->middleware('is_admin');
Route::get('/admin/women', [ShoeController::class, 'women'])->name('admin.women')->middleware('is_admin');
Route::get('/admin/house', [ShoeController::class, 'home'])->name('admin.house')->middleware('is_admin');

Route::get('/admin/comments', [ContactFormController::class, 'showComments'])->name('admin.comments')->middleware('is_admin');






Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('is_admin');
// Route::get('/admin/commands/new-count', [HomeController::class, 'getNewCommandsCount'])->name('admin.commands.new-count');
// Route::get('/admin/cart/count', [HomeController::class, 'getCartCount'])->name('admin.cart.count');
Route::get('/cart/count', [CartController::class, 'getCartItemCount'])->name('cart.count');



// search barre route 

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/search', [ShoeController::class, 'search'])->name('search');



Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::post('/cart/add/{shoe}', [CartController::class, 'add'])->name('cart.add')->middleware('auth');

// Route::delete('/cart/{id}', 'CartController@removeCartItem')->name('cart.remove');

Route::delete('/cart/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');

//paymenet 

Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('processPayment');
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment');
Route::get('/order-confirmation', [PaymentController::class, 'showOrderConfirmation'])->name('orderConfirmation');



//stat
Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics.index');



//contact route 
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');

