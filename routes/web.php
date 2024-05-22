<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/another', function () {
    return view('welcome2');
});

Route::get('/iqoo+neo+9+pro&crid=DDK763145FT2', function () {
    return view('detail'); // resourcese/view/detail.blade.php
});