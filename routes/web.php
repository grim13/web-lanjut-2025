<?php

use Illuminate\Support\Facades\Route;

// GET, POST, PUT, DELETE, PATCH

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', function() {
    return view('calculator.index');
});

Route::post('/calculator', function() {
    return view('calculator.hasil');
});
