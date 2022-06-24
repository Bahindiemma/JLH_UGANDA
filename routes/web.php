<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\{
    DashboardController,
    GalleryController,
    AboutController,
    BlogController,
    FaqController,
    SettingsController,
    ServiceController,
    websiteContactController
};

//website routes
Route::get('/', function () {
    return view('website.index');
});

// Route::view(uri: '/contact', view: 'website.contact');

Route::resource('contact', websiteContactController::class);

Route::view(uri: '/about', view: 'website.about');

Route::view(uri: '/blog', view: 'website.blog');

// Route::view(uri: '/contact', view: 'website.contact');

Route::view(uri: '/gallery', view: 'website.gallery');

Route::view(uri: '/services', view: 'website.services');

// Admin panel routes

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [DashboardController::class, 'index']);

    Route::resource('about', AboutController::class);

    Route::resource('blog', BlogController::class);

    Route::resource('photos', GalleryController::class);

    Route::resource('services', ServiceController::class);

    Route::resource('settings', SettingsController::class);

    Route::resource('faqs', FaqController::class);
    
});
