<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('service');
})->name('services');

Route::get('/contact', function () {

    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Auth Routes
Route::get('/admin', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/admin', [LoginController::class, 'login']);
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
});


Route::prefix('services')->name('services.')->group(function () {
    Route::get('/business-loan', function () { return view('services.business-loan'); })->name('business-loan');
    Route::get('/od-limit', function () { return view('services.od-limit'); })->name('od-limit');
    Route::get('/msme-limit', function () { return view('services.msme-limit'); })->name('msme-limit');
    Route::get('/lap', function () { return view('services.lap'); })->name('lap');
    Route::get('/home-loan', function () { return view('services.home-loan'); })->name('home-loan');
    Route::get('/personal-loan', function () { return view('services.personal-loan'); })->name('personal-loan');
});
