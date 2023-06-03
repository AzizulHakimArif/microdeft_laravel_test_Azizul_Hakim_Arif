
<?php

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

use App\Http\Controllers\ProductsController;

Route::get('/products/buy', [ProductsController::class, 'create'])->name('products.buy');
Route::get('/products', [ProductsController::class, 'store'])->name('products.store');

return view('welcome');
