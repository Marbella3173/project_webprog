<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/search', [SearchController::class, 'index'])->middleware('auth');

Route::get('/checkout', [CheckOutController::class, 'index'])->middleware('auth');

Route::post('/', [CheckOutController::class, 'checkout'])->middleware('auth');

Route::get('/add', [FoodController::class, 'add'])->middleware('auth');
Route::post('/add', [FoodController::class, 'store'])->middleware('auth');

Route::get('/food/{id}', [FoodController::class, 'detail']);
Route::post('/food/{id}', [FoodController::class, 'order']);

Route::get('/manage', [FoodController::class, 'manage_index'])->middleware('auth');
Route::post('/manage', [FoodController::class, 'destroy'])->middleware('auth');

Route::get('/update/{id}', [FoodController::class, 'update_index'])->middleware('auth');
Route::patch('/update/{id}', [FoodController::class, 'update'])->middleware('auth');

Route::get('/cart', [CartController::class, 'show'])->middleware('auth');
Route::post('/cart', [CartController::class, 'process'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/settings', [ProfileController::class, 'settings'])->middleware('auth');
Route::patch('/settings', [ProfileController::class, 'save'])->middleware('auth');

Route::get('/history', [TransactionController::class, 'index'])->middleware('auth');