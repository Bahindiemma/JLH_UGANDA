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

Route::resource('/', websiteContactController::class, ['names' => ['index' => 'home']]);

Route::view(uri: '/contact', view: 'website.contact');

Route::get('about', [websiteContactController::class, 'about'])->name('about');

Route::get('blog', [websiteContactController::class, 'blog'])->name('blog');

Route::get('contact', [websiteContactController::class, 'contact'])->name('contact');

Route::get('gallery', [websiteContactController::class, 'gallery'])->name('gallery');

Route::get('services', [websiteContactController::class, 'services'])->name('services');


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
