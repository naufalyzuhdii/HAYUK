<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/mixmatchmenu', function () {
    return view('mixmatchmenu');
});

Route::get('/menuutama', function () {
    return view('menuutama');
});

Route::get('/menubumbu', function () {
    return view('menubumbu');
});

Route::get('/orderfood', function () {
    return view('orderfood');
});
