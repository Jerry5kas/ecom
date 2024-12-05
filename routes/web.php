<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/product-details', App\Livewire\ProductDetails::class)->name('product.details');

Route::get('/admin/dashboard', App\Livewire\AdminDashboard::class)->name('admin.dashboard');
