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

Route::get('/duralam-essential-pre-laminated-panels', [HomeController::class, 'duralam'])->name('product.duralam');
Route::get('/opulum-exclusive-pre-laminated-panels', [HomeController::class, 'opulum'])->name('product.opulum');
Route::get('/textura-textured-pre-laminated-panels', [HomeController::class, 'textura'])->name('product.textura');
Route::get('/uv-finishes', [HomeController::class, 'uvfinishes'])->name('product.uvfinishes');
// Route::get('/velvetmatte-super-matte-uv-finish', [HomeController::class, 'velvetmatte'])->name('product.velvetmatte');
// Route::get('/velvetgloss-high-gloss-uv-finish', [HomeController::class, 'velvetgloss'])->name('product.velvetgloss');
Route::get('/lucentacrylic-acrylic-finishes', [HomeController::class, 'lucentacrylic'])->name('product.lucentacrylic');
Route::get('/cutting-edge-pet-eb-panels', [HomeController::class, 'cuttingedge'])->name('product.cuttingedge');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');
