<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\DashboardControllers\BlogCategoryController;
use App\Http\Controllers\DashboardControllers\home\BlogController;
use App\Http\Controllers\DashboardControllers\home\FaqController;
use App\Http\Controllers\DashboardControllers\home\hs1LeftController;
use App\Http\Controllers\DashboardControllers\home\hs1RightController;
use App\Http\Controllers\DashboardControllers\home\hs2Controller;
use App\Http\Controllers\DashboardControllers\home\hs3LeftController;
use App\Http\Controllers\DashboardControllers\home\hs3RightController;
use App\Http\Controllers\DashboardControllers\home\hs4Controller;
use App\Http\Controllers\DashboardControllers\home\TeamController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

$sectionIdArray = array( 1=>'Home Sec 1 left',2=>'Home Sec 1 Right(Banner)',3=>'Home Sec 2(About)',4=>'Home Sec 3 Right',5=>'Home Sec 3 Left',6=>'Home Sec 4',7=>'Faq',8=>'Team',9=>'Blog');
Auth::routes();

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/teams', 'teams')->name('teams');
    Route::get('/service/details/{slug}', 'services_details')->name('service.details');
    Route::get('/team/member/{slug}', 'services_details')->name('team_details');
    Route::get('/blogs', 'blogs')->name('blog');
    Route::get('/blog/details/{slug}', 'blogs')->name('blog-details');
    Route::get('/kyc', 'kyc')->name('kyc');
    // Route::get('/admin', 'dashboard')->name('admin');
});
Route::controller(BackendController::class)->prefix('admin')->group(function(){
    Route::get('/', 'dashboard')->name('dashboard');
    Route::get('/banner-publish', 'bannerPublish')->name('bannerPublish');
});

Route::middleware(['auth'])->group(function () {
    // HOME PAGE MANAGEMENT ROUTES
    Route::resource('homeS1Left', hs1LeftController::class)->only(['index','store','update']);
    Route::post('homeS1Left/published',[hs1LeftController::class, 'published'])->name('homeS1Left.publish');

    Route::resource('homeS1Right', hs1RightController::class)->only(['index','store','edit','update','destroy']);
    Route::post('homeS1Right/published',[hs1RightController::class, 'published'])->name('homeS1Right.publish');

    Route::resource('homeS2', hs2Controller::class)->only(['index','store','update']);
    Route::post('homeS2/published',[hs2Controller::class, 'published'])->name('homeS2.publish');

    Route::resource('homeS3Left', hs3LeftController::class)->only(['index','store','edit','update','destroy']);
    Route::post('homeS3Left/published',[hs3LeftController::class, 'published'])->name('homeS3Left.publish');

    Route::resource('homeS3Right', hs3RightController::class)->only(['index','store','update']);
    Route::post('homeS3Right/published',[hs3RightController::class, 'published'])->name('homeS3Right.publish');

    Route::resource('homeS4', hs4Controller::class);
    Route::post('homeS4/title/store',[hs4Controller::class, 'title_store'])->name('homeS4.title_store');
    Route::put('homeS4/title/update/{id}',[hs4Controller::class, 'title_update'])->name('homeS4.title_update');
    Route::post('homeS4/published',[hs4Controller::class, 'published'])->name('homeS4.publish');

    Route::resource('faq', FaqController::class);
    Route::post('faq/title/store',[FaqController::class, 'title_store'])->name('faq.title_store');
    Route::put('faq/title/update/{id}',[FaqController::class, 'title_update'])->name('faq.title_update');
    Route::post('faq/published',[FaqController::class, 'published'])->name('faq.publish');

    Route::resource('team', TeamController::class);
    Route::post('team/title/store',[TeamController::class, 'title_store'])->name('team.title_store');
    Route::put('team/title/update/{id}',[TeamController::class, 'title_update'])->name('team.title_update');
    Route::post('team/published',[TeamController::class, 'published'])->name('team.publish');

    Route::resource('blog-category', BlogCategoryController::class)->only('index','store','edit','update');

    Route::resource('blog', BlogController::class);
    Route::post('blog/title/store',[BlogController::class, 'title_store'])->name('blog.title_store');
    Route::put('blog/title/update/{id}',[BlogController::class, 'title_update'])->name('blog.title_update');
    Route::post('blog/published',[BlogController::class, 'published'])->name('blog.publish');
});
