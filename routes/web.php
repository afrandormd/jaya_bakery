<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Livewire\Home::class, 'render'])->name('home');
Route::get('/products', [App\Livewire\ProductIndex::class, 'render'])->name('products');
