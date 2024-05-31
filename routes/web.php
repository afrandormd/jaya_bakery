<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Livewire\Home::class, 'render'])->name('home');
