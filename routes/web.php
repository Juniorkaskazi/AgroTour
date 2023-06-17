<?php

use App\Http\Controllers\UI\UIController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [pagesController::class, 'index']);

Route::get('/about-us', [UIController::class, 'aboutUs']);

Route::get('/contact', [UIController::class, 'contacts']);

Route::get('/tour-grid', [UIController::class, 'tourGrid']);

Route::get('/tour-detail', [UIController::class, 'tourDetails']);

Route::get('/tour-list', [UIController::class, 'tourList']);

Route::get('/tour-list-slider', [UIController::class, 'tourListSlider']);

Route::get('/tour-grid-slider', [UIController::class, 'tourDetailsSlider']);

// Route::get('/tour-grid', function () {
//     return view('tour-grid');
// });

// Route::get('/destination-detail', [UIController::class, 'destination']);

Route::get('/destination-grid', [UIController::class, 'destinationGrid']);

Route::get('/destination-grid-slider', [UIController::class, 'destinationGridSlider']);

Route::get('/destination-list', [UIController::class, 'destinationList']);

// Route::get('/destination-grid', function () {
//     return view('destination-grid');
// });

Route::get('/destination-list-slider', [UIController::class, 'destinationListSlider']);

// Route::get('/destination-list', function () {
//     return view('destination-list');
// });

// Route::get('/destination-list-slider', function () {
//     return view('destination-list-slider');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('booking', [BookingController::class, 'store']);
Route::post('/findFarm', [pagesController::class, 'findFarm']);
Route::get('/viewFarm/{farmId}', [pagesController::class, 'viewFarm']);
Route::get('/destination-detail/', [pagesController::class, 'viewFarm']);