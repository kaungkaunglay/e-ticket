<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ResturantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/


Route::domain('{locale}.localhost')->group(function () {
    Route::get('/', function ($locale) {
        if (!in_array($locale, ['en', 'jp'])) {
            abort(404);
        }
        App::setLocale($locale);
        return view('home');
    })->name('home');

    Route::get('/login', fn() => view('login'))->name('login');
    Route::get('/signup', fn() => view('signup'))->name('signup');
    Route::get('/restaurant-list', fn() => view('restaurant-list'))->name('restaurant-list');
    Route::get('/search-result', fn() => view('search-result'))->name('search-result');
    Route::get('/restaurant-detail', fn() => view('restaurant-detail'))->name('restaurant-detail');
    Route::get('/booking', fn() => view('booking'))->name('booking');
    Route::get('/user-dashboard', fn() => view('user-dashboard'))->name('user-dashboard');
    Route::get('/about-us', fn() => view('about'))->name('about');
    Route::get('/support', fn() => view('contact'))->name('contact');
    Route::get('/terms', fn() => view('terms'))->name('terms');
    Route::get('/404', fn() => view('404'))->name('404');
    Route::get('/db-vendor-dashboard', fn() => view('db-vendor-dashboard'))->name('db-vendor-dashboard');
    Route::get('/page1', fn() => view('Admin.Pages.page1'))->name('page1');

   
    Route::get('/resturant/user-dashboard', fn() => view('resturant.user-dashboard'))->name('resturant-user-dashboard');
    Route::get('owner/resturant', [ResturantController::class, 'index'])->name('resturant.index');
    Route::get('owner/resturant/create', [ResturantController::class, 'create'])->name('resturant.create');
    Route::post('owner/resturant', [ResturantController::class, 'store'])->name('resturant.store');
    Route::get('owner/resturant/{restaurant}/edit', [ResturantController::class, 'edit'])->name('resturant.edit');
    Route::put('owner/resturant/{restaurant}', [ResturantController::class, 'update'])->name('resturant.update');
    Route::delete('owner/resturant/{restaurant}', [ResturantController::class, 'destroy'])->name('resturant.destroy');

  
    Route::get('owner/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('owner/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('owner/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('owner/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('owner/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('owner/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});


Route::get('/', function () {
    App::setLocale('en');
    return view('home');
})->name('default-home');
