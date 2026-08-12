<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// About & Governance
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/objectives', [PageController::class, 'objectives'])->name('objectives');
Route::get('/principal-desk', [PageController::class, 'principal'])->name('principal');

// Academics & Admission
Route::get('/admission', [PageController::class, 'admission'])->name('admission');
Route::get('/fees-structure', [PageController::class, 'fees'])->name('fees');
Route::get('/curriculum', [PageController::class, 'curriculum'])->name('curriculum');

// Achievements & Gallery
Route::get('/toppers/class-x', [PageController::class, 'toppersX'])->name('toppers.x');
Route::get('/toppers/class-xii', [PageController::class, 'toppersXII'])->name('toppers.xii');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/tc', [PageController::class, 'tc'])->name('tc');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Facilities Detail Route
Route::get('/facility/{slug}', [PageController::class, 'facilityDetail'])->name('facility.show');

// General / Dynamic Content Page Route
Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');
