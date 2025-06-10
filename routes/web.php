<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;


Route::get('/gallery', [GalleryController::class, 'gallery'])
    ->name('gallery');


Route::get('/', [HomeController::class, 'index'])->name('home');