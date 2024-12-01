<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product-details', App\Livewire\ProductDetails::class)->name('product.details');
