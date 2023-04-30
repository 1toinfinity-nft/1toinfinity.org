<?php

use App\Http\Controllers\App\BlogController;
use App\Http\Controllers\Front\BlogController as FrontBlogController;
use Illuminate\Support\Facades\Route;

// App Routes (app.domain.tld)
Route::domain('app.' . env('APP_TLD'))->group(function () {
    Route::redirect('/', '/login');

    Route::middleware('auth')->group(function () {
        Route::view('/dashboard', 'app.dashboard', ['title' => 'Dashboard'])->name('app.dashboard');

        Route::resource('/blogs', BlogController::class, [
            'except' => ['show', 'edit', 'update']
        ])->names('app.blogs');
    });
});

// Front Routes (domain.tld)
Route::get('/', fn () => inertia('Home'))->name('front.home');
Route::get('/about', fn () => inertia('About'))->name('front.about');
Route::prefix('/blog')->group(function () {
    Route::get('/', [FrontBlogController::class, 'index'])->name('front.blog');
    Route::get('/{slug}', [FrontBlogController::class, 'show'])->name('front.blog.show');
});
Route::get('/collection', fn () => inertia('Collection'))->name('front.collection');
Route::get('/open', fn () => inertia('Open'))->name('front.open');
Route::get('/roadmap', fn () => inertia('Roadmap'))->name('front.roadmap');
