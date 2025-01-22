<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataParserController;

Route::get('/homepage', function () {
    return view('welcome');

});
Route::get('/login', function () {
    return view('login');

});
Route::get('/sign-up', function () {
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

})->name('profile');

Route::post('/login/validate', [AuthController::class, 'validateLogin']);
