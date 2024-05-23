<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/another', function () {
    return view('welcome2');
});

Route::get('/another3', function () {
    return view('welcome3');
});
Route::get('/amazon', function () {
    return view('amazon');
});
Route::get('/amazon2', function () {
    return view('amazon2');
});

Route::get('/iqoo+neo+9+pro&crid=DDK763145FT2', function () {
    return view('detail'); // resourcese/view/detail.blade.php
});