<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/HomeView');
});

Route::get('/produk', [ProductController::class, 'index']);

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
