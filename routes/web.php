<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/about', function () {
    return view('companyTag.aboutUs');
});
Route::get('/our-partners', function () {
    return view('companyTag.ourPartner');
});
Route::get('/corporate-citizenship', function () {
    return view('companyTag.corporateCitizenship');
});
Route::get('/our-vision', function () {
    return view('companyTag.ourVision');
});
