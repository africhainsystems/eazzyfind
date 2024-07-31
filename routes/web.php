<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/listing', 'listing')->name('listing');
    Route::get('/listing/{slug}', 'listingDetails')->name('listing.details');
    Route::get('/about', 'about')->name('about');
    Route::get('/experts', 'experts')->name('experts');
    Route::get('/travel', 'travel')->name('travel');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/faqs', 'faqs')->name('faqs');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
