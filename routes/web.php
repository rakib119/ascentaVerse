<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\DashboardControllers\home\hs1LeftController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

$sectionIdArray = array( 1=>'Home Sec 1 left');
Auth::routes();

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/blogs', 'blogs')->name('blog');
    Route::get('/kyc', 'kyc')->name('kyc');
    // Route::get('/admin', 'dashboard')->name('admin');
});
Route::controller(BackendController::class)->prefix('admin')->group(function(){
    Route::get('/', 'dashboard')->name('dashboard');
    Route::get('/banner-publish', 'bannerPublish')->name('bannerPublish');
});

Route::resource('homeS1Left', hs1LeftController::class)->only(['index','store','update']);
Route::post('homeS1Left/published',[hs1LeftController::class, 'published'])->name('homeS1Left.publish');
