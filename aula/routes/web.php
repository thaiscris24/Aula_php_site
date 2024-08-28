<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('banner');
});


Route::get('/produtos', function () {
    return view('produtos');
});
