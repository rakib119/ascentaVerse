<?php

use App\Http\Controllers\DashboardControllers\BackendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/blogs', 'blogs')->name('blog');
    Route::get('/kyc', 'kyc')->name('kyc');
    // Route::get('/admin', 'dashboard')->name('admin');
});
Route::controller(BackendController::class)->group(function(){
    Route::get('/admin', 'dashboard')->name('dashboard');
    Route::get('/banner-publish', 'bannerPublish')->name('bannerPublish');
});
