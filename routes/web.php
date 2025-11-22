<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/resort', function () {
    return view('resort');
});

Route::get('/cafe', function () {
    return view('cafe');
});
