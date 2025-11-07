<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/home',[HomeController::class,'home']);
Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('companyTag.aboutUs');
});

Route::get('/overview', function () {
    return view('businesses.overview');
});
