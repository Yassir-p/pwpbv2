<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/HomeView');
});

Route::get('/produk', [ProductController::class, 'index'])->name('produk');

Route::get('/hubungi', function () {
    return view('pages/ContactView');
});

Route::get('/tentang', function () {
    return view('pages/AboutView');
});

Route::get('/dashboard', function () {
    return view('pages/admin/DashboardView');
});

Route::get('/dashboardAdd', function () {
    return view('pages/admin/DashboardAddView');
});

Route::get('/dashboardEdit', function () {
    return view('pages/DashboardEditView');
});

Route::get('/dashboardData', function () {
    return view('pages/DashboardDataView');
});

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'registerForm'])->name('registerForm');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware('auth:pengguna')->group(function () {

    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

    Route::post('/cart/pesan', [CartController::class, 'pesan'])->name('cart.pesan');

    Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

    Route::get('/cart-count', [CartController::class, 'count']);

    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
});

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/loginAdmin', [AdminController::class, 'index'])->name('loginAdmin');
Route::get('/kelolaProduk', [AdminController::class, 'kelolaProduk'])->name('kelolaProduk');
Route::get('/kelolaPengguna', [AdminController::class, 'kelolaPengguna'])->name('kelolaPengguna');
Route::get('/tambahDataPengguna', [AdminController::class, 'tambahDataPengguna'])->name('tambahDataPengguna');
Route::get('/tambahDataProduk', [AdminController::class, 'tambahDataProduk'])->name('tambahDataProduk');
Route::get('/admin/pengguna/edit/{id}', [AdminController::class, 'editPengguna'])->name('pengguna.edit');
Route::get('/admin/pengguna/delete/{id}', [AdminController::class, 'hapusPengguna'])->name('pengguna.delete');
Route::post('/pengguna/update/{id}', [AdminController::class, 'updatePengguna'])->name('pengguna.update');
Route::get('/pengguna/tambah', [AdminController::class, 'tambahDataPengguna'])->name('pengguna.create');
Route::post('/pengguna/store', [AdminController::class, 'storePengguna'])->name('pengguna.store');
Route::get('/admin/produk/edit/{id}', [AdminController::class, 'editProduk'])->name('produk.edit');
Route::get('/admin/produk/delete/{id}', [AdminController::class, 'hapusProduk'])->name('produk.delete');
Route::post('/admin/produk/store', [AdminController::class, 'storeProduk'])->name('produk.store');
Route::get('/admin/produk', [AdminController::class, 'kelolaProduk'])->name('produk.index');
Route::get('/admin/produk/{id}/edit', [AdminController::class, 'editProduk'])->name('produk.edit');
Route::put('/admin/produk/{id}', [AdminController::class, 'updateProduk'])->name('produk.update');
