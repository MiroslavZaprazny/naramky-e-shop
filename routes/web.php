<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\BraceletController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
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
Route::get('/bracelets-create', [BraceletController::class, 'create'])->name('bracelet.create')->middleware('admin');
Route::post('/bracelets-create', [BraceletController::class, 'store'])->name('bracelet.store')->middleware('admin');

Route::get('/shopping-cart', [ShoppingCartController::class, 'show'])->name('shopping-cart.show');

Route::get('/order', [OrderController::class, 'create'])->name('order.create');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::get('/order-completed/{id}', [OrderController::class, 'completed'])->name('order.completed');

Route::get('/login', [LoginController::class, 'create'])->name('login.create')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login.store')->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->name('login.destroy')->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('/admin-panel', [AdminPanelController::class, 'index'])->name('admin.index')->middleware('admin');