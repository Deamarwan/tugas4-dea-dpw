<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/watch', function () {
    return view('watch');
});

Route::get('/Login', function () {
    return view('Login');
});
// Admin
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('promo', [HomeController::class, 'showPromo']);

// User
// Route::get('home', [UserController::class, 'showHome']);
// Route::get('kategori', [UserController::class, 'showKategori']);
// Route::get('promo', [UserController::class, 'showPromo']);


// // Auth
// Route::get('/login', [AuthController::class, 'showLogin']);
// Route::get('/register', [AuthController::class, 'showRegister']);

// Setting Produk
Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk/create', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
// update
Route::put('produk/{produk}', [ProdukController::class, 'update']);
// delete
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
// setting produk

// // Setting Kategori
// Route::get('kategori', [KategoriController::class, 'index']);
// Route::get('kategori/create', [KategoriController::class, 'create']);
// Route::post('kategori', [KategoriController::class, 'store']);
// Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
// Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit']);
// // update
// Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
// // delete
// Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);
// // Setting Kategori