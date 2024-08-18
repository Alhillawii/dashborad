<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dd', function () {
    return view('layout/dashboard');
});

Route::get('/admin', function () {
    return view('admin/index');
});