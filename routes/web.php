<?php

use Illuminate\Support\Facades\Route;

$tld = str_replace(['https://', 'http://'], '', env('APP_URL'));

// App Routes (app.domain.tld)
Route::domain('app.' . $tld)->group(function () {
    Route::get('/', fn () => dd('Hello World'))->name('app.home');
});

// Front Routes (domain.tld)
Route::get('/', fn () => inertia('Home'))->name('front.home');
Route::get('/about', fn () => inertia('About'))->name('front.about');
Route::get('/blog', fn () => inertia('Blog'))->name('front.blog');
Route::get('/collection', fn () => inertia('Collection'))->name('front.collection');
Route::get('/open', fn () => inertia('Open'))->name('front.open');
Route::get('/roadmap', fn () => inertia('Roadmap'))->name('front.roadmap');
