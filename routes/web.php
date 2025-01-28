<?php

use Illuminate\Support\Facades\Route;

Route::get('/homepage', function () {
    return view('welcome');

});

Route::get('/user/{userID}/post/{postID}', function () {
    // You can use $userID and $postID in your logic here
    return view('profile');
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

// Route::get('/sgbb', function () {
//     return view('sgbb');

// });
// Route::get('/sgbb-details', function () {
//     return view('sgbb-details');

// });
Route::get('/profile', function () {
    return view('profile');

});
// Route::get('/chat', function () {
//     return view('chat');

// });
Route::get('/profile-edit', function () {
    return view('profile-edit');

});
Route::get('/linkpage', function () {
    return view('linkpage');

});

Route::get('/topicPage', function () {
    return view('topicPage');

});