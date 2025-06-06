<?php

use Illuminate\Support\Facades\Route;

Route::get('/oi', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('main');
});

