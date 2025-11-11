<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/overview', function () {
    return view('businesses.overview');
});

Route::get('/animalhealth', function () {
    return view('businesses.animalHealth');
});
Route::get('/healthcare', function () {
    return view('businesses.healthcare');
});
Route::get('/communicationsystems', function () {
    return view('businesses.communicationsystems');
});
Route::get('/broadband', function () {
    return view('businesses.broadband');
});
Route::get('/broadcasting', function () {
    return view('businesses.broadcasting');
});
Route::get('/elevators&escalators', function () {
    return view('businesses.elevators');
});
Route::get('/construction', function () {
    return view('businesses.construction');
});
Route::get('/hospitality', function () {
    return view('businesses.hospitality');
});
Route::get('/energy', function () {
    return view('businesses.energy');
});
Route::get('/manufacturing', function () {
    return view('businesses.manufacturing');
});


// Company Tag Route
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


// Careers Tag Route
Route::get('/jobs', function () {
    return view('careersTag.jobs');
});
Route::get('/overView', function () {
    return view('careersTag.overView');
});

// Safety And Compliance Route
Route::get('/safetyAndCompliance', function () {
    return view('safetyAndComplianceTag.safetyAndCompliance');
});

// Service Excellence Route
Route::get('/serviceExcellence', function () {
    return view('serviceExcellenceTag.serviceExcellence');
});

// Contact Us Route
Route::get('/contactUs', function () {
    return view('contactUs.contactUs');
});
