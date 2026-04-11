<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

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


Route::prefix('services')->name('services.')->group(function () {
    Route::get('/business-loan', function () { return view('services.business-loan'); })->name('business-loan');
    Route::get('/od-limit', function () { return view('services.od-limit'); })->name('od-limit');
    Route::get('/msme-limit', function () { return view('services.msme-limit'); })->name('msme-limit');
    Route::get('/lap', function () { return view('services.lap'); })->name('lap');
    Route::get('/home-loan', function () { return view('services.home-loan'); })->name('home-loan');
    Route::get('/personal-loan', function () { return view('services.personal-loan'); })->name('personal-loan');
});
