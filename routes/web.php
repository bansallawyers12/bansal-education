<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;

// Public Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Login routes (accessible without authentication)
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Protected admin routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Pages management routes
        Route::get('/pages/{page}/preview', [PageController::class, 'preview'])->name('pages.preview');
        Route::resource('pages', PageController::class);
    });
});

// Dynamic page routes (must be last to avoid conflicts with other routes)
Route::get('/{slug}', [\App\Http\Controllers\PageController::class, 'show'])
    ->where('slug', '[a-z0-9-]+')
    ->name('page.show');
