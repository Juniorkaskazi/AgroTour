<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/tour-grid', function () {
    return view('tour-grid');
});

Route::get('/tour-detail', function () {
    return view('tour-detail');
});

// Route::get('/tour-grid', function () {
//     return view('tour-grid');
// });

Route::get('/tour-grid-slider', function () {
    return view('tour-grid-slider');
});

Route::get('/tour-list', function () {
    return view('tour-list');
});

Route::get('/tour-list-slider', function () {
    return view('tour-list-slider');
});

Route::get('/destination-detail', function () {
    return view('destination-detail');
});

Route::get('/destination-grid', function () {
    return view('destination-grid');
});

Route::get('/destination-grid-slider', function () {
    return view('destination-grid-slider');
});

Route::get('/destination-list', function () {
    return view('destination-list');
});

Route::get('/destination-list-slider', function () {
    return view('destination-list-slider');
});