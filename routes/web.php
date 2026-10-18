<?php

use App\Http\Controllers\DishController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/produk', [DishController::class, 'index'])->name('products.index');
Route::get('/produk/{dish}', [DishController::class, 'show'])->name('products.show');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
