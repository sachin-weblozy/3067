<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/pre-laminated-boards', [HomeController::class, 'plb'])->name('product.plb');
Route::get('/textured-laminates', [HomeController::class, 'tl'])->name('product.tl');
Route::get('/uv-coated-laminates', [HomeController::class, 'uv'])->name('product.uv');
Route::get('/pet-eb-boards', [HomeController::class, 'pet'])->name('product.pet');
Route::get('/acrylic-sheets', [HomeController::class, 'as'])->name('product.as');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');
