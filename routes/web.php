<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/login', function () {
    return view('login');

});
Route::get('/signin', function () {
    return view('signin');

});
Route::get('/details', function () {
    return view('partials.details');

});
Route::get('/sgbb', function () {
    return view('sgbb');

});
Route::get('/sgbb-details', function () {
    return view('sgbb-details');

});
Route::get('/profile', function () {
    return view('profile');

});