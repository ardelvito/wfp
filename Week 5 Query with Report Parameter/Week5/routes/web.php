<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

use App\Models\Category;
use App\Models\Product;
use Database\Seeders\SupplierSeeder;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.index');
});

Route::resource('/products', ProductController::class);
Route::resource('/categories', CategoryController::class);

// Route::resource('/suppliers', [SupplierController::class, 'lowestStock']);

Route::get('/suppliers/lowestStock', [SupplierController::class, 'lowestStock']);

//all categories avg price
// Route::get('/report/allaverageprice', [CategoryController::class, 'avgPrice']);

//avg price
Route::get('/report/{kategori?}/averageprice', [CategoryController::class, 'eachAvgPrice'])->defaults('kategori', 'all');


