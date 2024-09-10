<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home');

Route::get('home', function () {
    return view('block57.home');
})->name('home');

Route::get('lifestyle', function () {
    return view('block57.lifestyle');
})->name('lifestyle');

Route::get('apartments', function () {
    return view('block57.apartments');
})->name('apartments');

Route::get('gallery', function () {
    return view('block57.gallery');
})->name('gallery');

Route::get('contact', function () {
    return view('block57.contact');
})->name('contact');
