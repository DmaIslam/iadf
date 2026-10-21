<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Group Personal Profile Website
|--------------------------------------------------------------------------
| / .................... main page listing every group member
| /{member} ............ that member's Home page
| /{member}/about ...... that member's About Me page
| /{member}/contact .... that member's Contact page
*/

// Main page (member selection)
Route::get('/', [ProfileController::class, 'main'])->name('main');

// Separate Home, About Me and Contact pages for each member
Route::prefix('{member}')->group(function () {
    Route::get('/',        [ProfileController::class, 'home'])->name('home');
    Route::get('/about',   [ProfileController::class, 'about'])->name('about');
    Route::get('/contact', [ProfileController::class, 'contact'])->name('contact');
});
