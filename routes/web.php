<?php

use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Models\Resturant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ResturantController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\VendorLoginController;
use App\Http\Controllers\Auth\UserLoginController;
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
// Route::get('/login', function () {
//     return view('login');
// })->name('login');
// Route::get('/signup', function () {
//     return view('signup');
// })->name('signup');
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

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/db-vendor-dashboard', function () {
    return view('db-vendor-dashboard');
})->name('db-vendor-dashboard');

//resturant
Route::get('/resturant/user-dashboard', function () {
    return view('resturant.user-dashboard');
})->name('resturant-user-dashboard');

Route::get('owner/resturant', [ResturantController::class, 'index'])->name('resturant.index');
Route::get('owner/resturant/create', [ResturantController::class, 'create'])->name('resturant.create');
Route::post('owner/resturant', [ResturantController::class, 'store'])->name('resturant.store');
Route::get('owner/resturant/{restaurant}/edit', [ResturantController::class, 'edit'])->name('resturant.edit');
Route::put('owner/resturant/{restaurant}', [ResturantController::class, 'update'])->name('resturant.update');
Route::delete('owner/resturant/{restaurant}', [ResturantController::class, 'destroy'])->name('resturant.destroy');

//category

Route::get('owner/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('owner/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('owner/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('owner/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('owner/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('owner/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');



// src="{{asset('assets/img
// svg')}}"
// png')}}"

// start auth
Route::get('/signup', [RegisterController::class, 'index'])->name('signup');
// Route::post('/register',[RegisterController::class,'register'])->name('register'); // for form
Route::post('/register', [RegisterController::class, 'store'])->name('register'); // for ajax
Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login',[LoginController::class,'login'])->name('login'); // for form
Route::post('/login', [LoginController::class, 'store'])->name('login.store'); // for ajax
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // for ajax
Route::get('/logout', [LoginController::class, 'destroy']); // for logout easily in development stage

Route::get('/forget-password', [ForgetPasswordController::class, 'index'])->name('forget_password');
// end auth

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);



Route::get('/vendor/login', [VendorLoginController::class, 'showLoginForm'])->name('vendor.login');
Route::post('/vendor/login', [VendorLoginController::class, 'login']);




Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});

Route::middleware(['vendor'])->group(function () {
    Route::get('/vendor/dashboard', function () {
        return view('vendor.dashboard');
    })->name('vendor.dashboard');

    Route::post('/vendor/logout', [VendorLoginController::class, 'logout'])->name('vendor.logout');
});
