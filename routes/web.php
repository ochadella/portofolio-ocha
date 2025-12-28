<?php

use Illuminate\Support\Facades\Route;

// Halaman Home (Landing Page)
Route::get('/', function () {
    return view('home');
});

// Route untuk Portfolio
Route::get('/portfolio/designphoto', function () {
    return view('portfolio.designphoto');
});

Route::get('/portfolio/webuiux', function () {
    return view('portfolio.webuiux');
});

Route::get('/portfolio/videoportof', function () {
    return view('portfolio.videoportof');
});

Route::get('/test-images', function () {
    return view('test-images');
});