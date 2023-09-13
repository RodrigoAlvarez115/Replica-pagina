<?php

use App\Http\Controllers\PublicationsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicationsController::class,'index'])->name('index');
Route::get('/notices',[PublicationsController::class,'notices'])->name('notices');
Route::get('/guides',[PublicationsController::class,'guides'])->name('guides');
Route::get('/reviews',[PublicationsController::class,'reviews'])->name('reviews');
Route::get('/search', [PublicationsController::class,'search'])->name('search');
Route::get('/publication/{publication}',[PublicationsController::class,'show'])->name('show');
