<?php

use Illuminate\Support\Facades\Route;

//http://127.0.0.1:8000/
// Route::get('/', function () {
//     return view('welcome');
// });

//http://127.0.0.1:8000/
Route::get('/', function () {
    return view('app');
})->name('home');

Route::prefix('pages')->group(function () {
    //http://127.0.0.1:8000/about
    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');

    //http://127.0.0.1:8000/contact
    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contact');

    //http://127.0.0.1:8000/post
    Route::get('/post', function () {
        return view('pages.post');
    })->name('post');

    //http://127.0.0.1:8000/link
    Route::get('/link', function () {
        return view('pages.link');
    })->name('link');
});
