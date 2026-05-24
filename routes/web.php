<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman.beranda');
});

// product
Route::get('/product', [ProductController::class, 'getProduct']);

Route::get('/product/tambah', [ProductController::class, 'input']);

Route::post('/product/simpan', [ProductController::class, 'simpan']);

Route::get('/product/hapus', [ProductController::class, 'input']);

Route::get('/product/hapus/{id}', [ProductController::class, 'hapus']);

Route::get('/product/edit/{id}', [ProductController::class, 'edit']);

Route::post('/product/update/{id}', [ProductController::class, 'update']);

Route::get('/about', function () {
    return view('halaman.about');
});

Route::view('/contact', 'halaman.contact');
