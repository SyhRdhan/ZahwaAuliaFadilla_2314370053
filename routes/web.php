<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('/login', 'login')->name('login');
Route::view('/index', 'index')->name('index');