<?php

use Illuminate\Support\Facades\Route;

// the default welcome route.
// Route::get('/', function () {
//     return view('welcome');
// });

//the home route.
Route::get('/', function () {
    return view('home');
});

//the about route.
Route::get('about', function () {
    return view('about');
});

// Route parameters.
Route::get('contact/{myName}', function($myName){
    return view('contact', ['myName' => $myName]);
});
