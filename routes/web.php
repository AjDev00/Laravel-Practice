<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/about', function(){
    return view('/about');
})->name('about');

Route::get('about/what-we-offer', function(){
    return view('what-we-offer');
})->name('about/what-we-offer');

Route::get('about/how-we-offer', function(){
    return view('how-we-offer');
})->name('about/how-we-offer');

Route::get('settings', function(){
    return view('settings');
})->name('settings');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/store', [ContactController::class, 'store'])->name('store');