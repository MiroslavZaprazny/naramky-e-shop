<?php

use App\Http\Controllers\BraceletController;
use App\Http\Controllers\ShoppingCartController;
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

Route::view('/', 'index');

Route::get('/bracelets', [BraceletController::class, 'index'])->name('bracelet.index');
Route::get('/bracelets/{bracelet:id}', [BraceletController::class, 'show'])->name('bracelet.show');
Route::get('/shopping-cart', [ShoppingCartController::class, 'show'])->name('shopping-cart.show');
