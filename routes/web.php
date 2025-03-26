<?php

use Illuminate\Support\Facades\Route;
// route welcome page
Route::get('/', function () {
    return view('welcome');
});

// route home page
Route::get('/home', function () {
    return view('home');
})->name('home');
