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
    return view('home');
})->name('home');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::get('/restaurant-list', function () {
    return view('restaurant-list');
})->name('restaurant-list');
Route::get('/search-result', function () {
    return view('search-result');
})->name('search-result');
Route::get('/restaurant-detail', function () {
    return view('restaurant-detail');
})->name('restaurant-detail');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/user-dashboard', function () {
    return view('user-dashboard');
})->name('user-dashboard');
Route::get('/about-us', function () {
    return view('about');
})->name('about');
Route::get('/support', function () {
    return view('contact');
})->name('contact');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

// src="{{asset('assets/img
// svg')}}"
// png')}}"
