<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/case-study', function () {
    return view('case-study');
});