<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductImageController;

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
|
*/

Route::view('/', 'guest.index')->name('guest.index');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('admin')->middleware('verified', 'auth', 'role:admin')->group(function()
{
		Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');

		Route::view('orders', 'admin.orders')->name('admin.orders');
		Route::view('order/{order_id}', 'admin.orderDetail')->name('order.detail');
		
		Route::resource('inventory/categories', CategoryController::class);
		Route::resource('inventory/products', ProductController::class);
		Route::resource('inventory/products/image', ProductImageController::class);
		Route::resource('users', UserController::class);

});





/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('account')->middleware('verified', 'auth', 'role:customer')->group(function()
{


});

require __DIR__.'/auth.php';
