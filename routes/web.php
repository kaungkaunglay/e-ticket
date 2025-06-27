<?php

use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ResturantController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\VendorLoginController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoperController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Routes
Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/restaurant/{id}', [HomeController::class, 'detail'])->name('restaurant.detail');
Route::get('/restaurant-lists', [HomeController::class, 'search'])->name('restaurant.search');
Route::get('/restaurant-alllists', [HomeController::class, 'allsearch'])->name('restaurantall.search');
Route::get('/restaurant-list-data', [ResturantController::class, 'all'])->name('restaurant-list');

Route::get('/search-price', [HomeController::class, 'pricesearch'])->name('restaurant.price.search');
Route::get('/search-checkbox', [HomeController::class, 'searchcheckbox'])->name('restaurant.searchcheckbox.search');
Route::get('/get-cities', [HomeController::class, 'getCities'])->name('cities.get');
Route::get('/get-sub-towns/{cityId}', [HomeController::class, 'getSubTowns'])->name('get.sub.towns');

Route::get('/report', [HomeController::class, 'report'])->name('restaurant.report');
Route::get('/reportuser', [HomeController::class, 'reportuser'])->name('restaurant.reportuser');
Route::post('/notify-new-update', [HomeController::class, 'notifynewupdate'])->name('notifynewupdate.post');
Route::post('/supportcontect', [HomeController::class, 'supportcontect'])->name('supportcontect.post');

Route::get('/about-us', fn() => view('about'))->name('about');
Route::get('/terms', fn() => view('terms'))->name('terms');
Route::get('/404', fn() => view('404'))->name('404');
Route::get('/mobile', fn() => view('layouts.mobile-view'));

// Support Routes
Route::get('/support', [SupportController::class, 'supportPage'])->name('support.page');
Route::get('/contents', [SupportController::class, 'contents'])->name('contents.page');


// Authenticated User Routes
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user-dashboard', [UserController::class, 'show'])->name('user.dashboard');
    Route::get('/user-dashboard-change', [UserController::class, 'showChange']);
    Route::put('/user/profileupdate', [UserController::class, 'profileupdate'])->name('user.profileupdate');
    Route::put('/user/password', [UserController::class, 'userpassword'])->name('user.password');
    Route::get('/user_booking', [UserController::class, 'userbooking'])->name('userbooking.dashboard');

    Route::get('/booking/detail/{id}', [BookingController::class, 'show'])->name('booking.detail');
    Route::post('/booking/save', [BookingController::class, 'booksave'])->name('booking.save');
    Route::get('/booking/cancel', [BookingController::class, 'bookcancel'])->name('booking.cancel');
    Route::get('/booking/thank-you', [BookingController::class, 'thankYou'])->name('booking.thankyou');
    Route::get('/booking/favourite', [BookingController::class, 'favourite'])->name('booking.favourite');
    Route::get('/favorites/remove', [BookingController::class, 'remove'])->name('favorites.remove');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/logout', [LoginController::class, 'destroy']);
});

// Guest Routes
Route::middleware('guest')->group(function () {

    // Authentication Routes
    Route::get('/signup', [RegisterController::class, 'index'])->name('signup');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/confirm/{token}', [RegisterController::class, 'confirmEmail'])->name('confirm');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');


    Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.get.login');
    Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.post.login');
    
    Route::get('/vendor/login', [VendorLoginController::class, 'showLoginForm'])->name('vendor.get.login');
    Route::post('/vendor/login', [VendorLoginController::class, 'login'])->name('vendor.post.login');
    Route::get('/vendor/register', [VendorLoginController::class, 'showRegisterForm'])->name('vendor.register');
    Route::post('/vendor/register', [VendorLoginController::class, 'registerVendor'])->name('vendor.register.submit');

    // Social Authentication
    Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
    Route::get('auth/line', [LoginController::class, 'redirectToLine'])->name('auth.line');
    Route::get('auth/line/callback', [LoginController::class, 'handleLineCallback']);

    // Password Reset Routes
    Route::get('/password/forget', [ForgetPasswordController::class, 'index'])->name('forget_password');
    Route::post('/password/sent', [ForgetPasswordController::class, 'sendResetLink'])->name('sent_reset_link');
    Route::get('/password/sent/{email}', [ForgetPasswordController::class, 'showSentLinkSuccess'])->name('show_sent_link_success');
    Route::get('/password/reset/{token}', [ForgetPasswordController::class, 'showResetForm'])->name('show_reset_form');
    Route::post('/password/reset', [ForgetPasswordController::class, 'reset'])->name('reset_password');
    Route::get('/password/success', [ForgetPasswordController::class, 'success'])->name('reset_success');
});

// Booking Routes
Route::middleware(['auth'])->group(function () {
    // Set booking date in session
    Route::post('/booking/set-session', [BookingController::class, 'setSession'])->name('booking.set-session');
});

// Admin Routes
Route::middleware(['admin'])->group(function () {
    Route::get('/owner/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    // Restaurant Management
    Route::resource('owner/resturant', ResturantController::class)->except(['show']);
    Route::get('owner/resturant/detail/{restaurant}', [ResturantController::class, 'show'])->name('resturant.show');
    Route::get('owner/get-sub-towns/{cityName}', [ResturantController::class, 'getSubadminTowns'])->name('get.owner.towns');

    // Categories
    Route::resource('owner/categories', CategoryController::class)->except(['show']);

    // Support Management
    Route::get('owner/support', [SupportController::class, 'index'])->name('support.index');
    Route::get('owner/createsupport/{id?}', [SupportController::class, 'postcreate'])->name('createsupport.create');
    Route::post('owner/storeOrUpdate/{id?}', [SupportController::class, 'storeOrUpdate'])->name('createsupport.storeOrUpdate');
    Route::delete('owner/question/{id}', [SupportController::class, 'questiondestroy'])->name('question.destroy');

    // Support Categories
    Route::get('owner/supportcategory', [SupportController::class, 'category'])->name('support.category');
    Route::get('owner/createcategory/{id?}', [SupportController::class, 'createcategory'])->name('support.createcategory');
    Route::post('owner/storecategory', [SupportController::class, 'storecategory'])->name('support.storecategory');
    Route::put('owner/updatecategory/{id}', [SupportController::class, 'update'])->name('support.updatecategory');
    Route::get('owner/support-category/{id}/edit', [SupportController::class, 'edit'])->name('support-category.edit');
    Route::delete('owner/support-category/{id}', [SupportController::class, 'destroy'])->name('support-category.destroy');

    // Promotions
    Route::get('/promotion/show', [SupportController::class, 'promoshow'])->name('promo.show');
    Route::post('/promotion/search', [SupportController::class, 'search'])->name('promo.search');
    Route::post('/promotion/update', [SupportController::class, 'updatePromo'])->name('update.promo');

    // Admin Bookings and Users
    Route::get('owner/admin_booking', [UserController::class, 'adminbooking'])->name('adminbooking.dashboard');
    Route::get('owner/userlist', [UserController::class, 'userlist'])->name('adminbooking.userlist');

    // Menu Management
    Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('menu/manage/{id?}', [MenuController::class, 'manage'])->name('menu.manage');
    Route::post('menu/store-or-update/{id?}', [MenuController::class, 'storeOrUpdate'])->name('menu.storeOrUpdate');
});

// Vendor Routes
Route::middleware(['vendor'])->group(function () {
    Route::get('/vendor/dashboard', fn() => view('vendor.dashboard'))->name('vendor.dashboard');
    Route::post('/vendor/logout', [VendorLoginController::class, 'logout'])->name('vendor.logout');
    Route::resource('vendor/resturant', ShoperController::class)->except(['show']);
});

