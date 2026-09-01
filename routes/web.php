<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sop', function () {
    return view('sop');
});

Route::get('/karier dosen', function () {
    return view('karier dosen');
});

Route::get('/interview', function () {
    return view('interview');
});

Route::get('/diklat', function () {
    return view('diklat');
});

Route::get('/lokakarya', function () {
    return view('lokakarya');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/sdm', function () {
    return view('sdm');
});

Route::get('/tailor', function () {
    return view('tailor');
});
