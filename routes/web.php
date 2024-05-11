<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

Route::get("/",[HomeController::class, 'index'])->name('home');;
Route::get("/san-pham",[ProductController::class, 'index'])->name('san-pham');
Route::get("/chi-tiet-san-pham/{slug}",[ProductController::class, 'detail'])->name('chi-tiet-san-pham');
Route::get("/lien-he",[ContactController::class, 'index'])->name('lien-he');



