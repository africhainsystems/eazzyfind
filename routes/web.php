<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\ListingsCategory;
use App\Http\Controllers\Admin\Listings;
use App\Http\Controllers\Admin\VendorsController;
use App\Http\Controllers\Admin\Reviews;

use App\Livewire\Admin\Dashboard;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::controller(HomeController::class)->group(function(){
    // Route::get('/', 'index')->name('home');
    Route::get('/listing', 'listing')->name('listing');
    Route::get('/listing/{slug}', 'listingDetails')->name('listing.details');
    Route::get('/about', 'about')->name('about');
    Route::get('/experts', 'experts')->name('experts');
    Route::get('/travel', 'travel')->name('travel');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/faqs', 'faqs')->name('faqs');
});

Route::prefix('admin')->group(function () {
    Route::controller(AdminDashboard::class)->group(function(){
        Route::get('/dashboard', 'index')->name('admin.dashboard');
    });

    Route::controller(ListingsCategory::class)->group(function(){
        Route::get('/listing/category', 'index')->name('admin.listing.category');
        Route::post('/listing/category/add', 'addCategory');
        Route::post('/listing/category/changeStatus', 'categoryStatus');
        Route::get('/listing/category/{id}/details', 'categoryDetails');
        Route::post('/listing/category/update', 'updateCategory');
        Route::post('/listing/category/delete', 'deleteCategory');
    });

    Route::controller(Listings::class)->group(function(){
        Route::get('/listings', 'index')->name('admin.listings');
        Route::get('/listings/pending', 'pendingListings')->name('admin.listings.pending');
        Route::get('/listings/inactive', 'inactiveListings')->name('admin.listings.inactive');
        Route::get('/listings/add', 'addListings')->name('admin.listings.add');
    });

    Route::controller(Reviews::class)->group(function(){
        Route::get('/listings/reviews', 'index')->name('admin.listings.reviews');

        Route::get('/listings/messages', 'messages')->name('admin.listings.messages');
    });

    Route::controller(VendorsController::class)->group(function(){
        Route::get('/vendors', 'index')->name('admin.vendors');
        Route::get('/vendors/active', 'activeVendors')->name('admin.vendors.active');
        Route::get('/vendors/pending', 'pendingVendors')->name('admin.vendors.pending');
        Route::get('/vendors/cancelled', 'cancelledVendors')->name('admin.vendors.cancelled
        ');
        Route::get('/vendors/add', 'addVendor')->name('admin.vendors.add');
        Route::post('/vendors/save', 'saveVendor')->name('admin.vendors.save');
        Route::get('/vendors/{id}/edit', 'editVendor')->name('admin.vendors.edit');
        Route::post('/vendors/{id}/update', 'updateVendor')->name('admin.vendors.update');
        Route::post('/vendors/changeStatus', 'vendorStatus');

        Route::get('/identityform', 'identityform')->name('admin.identityform');
        Route::post('/identityform/add', 'addForm');
        Route::post('/identityform/changeStatus', 'formStatus');
        Route::get('/identityform/{id}/details', 'formDetails');
        Route::post('/identityform/update', 'updateForm');
        Route::post('/identityform/delete', 'deleteForm');
    });
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
