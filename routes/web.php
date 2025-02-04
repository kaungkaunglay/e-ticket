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
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/restaurant-list', function () {
    return view('restaurant-list');
});
Route::get('/restaurant-detail', function () {
    return view('restaurant-detail');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/support', function () {
    return view('contact');
});

// src="{{asset('assets/img
// svg')}}"
// png')}}"