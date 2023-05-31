<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Models\Category;
use App\Models\Transaction;
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
    return view('layout.example');
});
Route::post('/products/showInfo', [ProductController::class, 'showInfo'])->name('products.showInfo');

Route::resource('/products', ProductController::class);
Route::resource('/categories', CategoryController::class);

// Route::resource('/transactions', TransactionController::class)->name('transactions.create');
Route::resource('/transactions', TransactionController::class);
Route::post('/transactions/showDataAjax/', [TransactionController::class, 'showAjax'])->name('transaction.showAjax');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transaction.Index');

