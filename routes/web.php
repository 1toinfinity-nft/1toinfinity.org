<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => inertia('Home'))->name('front.home');
Route::get('/about', fn () => inertia('About'))->name('front.about');
Route::get('/blog', fn () => inertia('Blog'))->name('front.blog');
Route::get('/collection', fn () => inertia('Collection'))->name('front.collection');
Route::get('/open', fn () => inertia('Open'))->name('front.open');
Route::get('/roadmap', fn () => inertia('Roadmap'))->name('front.roadmap');
