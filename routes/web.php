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
    Route::get('/{slug}', function ($slug) {
        $services = [
            'retail-health-insurance' => 'RETAIL HEALTH INSURANCE',
            'motor-insurance' => 'MOTOR INSURANCE',
            'fire-insurance' => 'FIRE INSURANCE',
            'burglary-insurance' => 'BURGLARY INSURANCE',
            'industrial-all-risk' => 'INDUSTRIAL ALL RISK',
            'marine-insurance' => 'MARINE INSURANCE',
            'commercial-general-liability' => 'COMMERCIAL GENERAL LIABILITY',
            'directors-and-officers-liability' => 'DIRECTORS AND OFFICERS LIABILITY',
            'public-liability' => 'PUBLIC LIABILITY',
            'cyber-liability' => 'CYBER LIABILITY',
            'employee-dishonesty-commercial-crime' => 'EMPLOYEE DISHONESTY /COMMERCIAL CRIME',
            'fidelity-guarantee' => 'FIDELITY GUARANTEE',
            'machinary-breakdown' => 'MACHINARY BREAKDOWN',
            'electronic-equipment-portable-equipments' => 'ELECTRONIC EQUIPMENT/PORTABLE EQUIPMENTS',
            'erection-all-risk' => 'ERECTION ALL RISK',
            'contractor-all-risk' => 'CONTRACTOR ALL RISK',
            'contractor-plant-and-machinary' => 'CONTRACTOR PLANT AND MACHINARY',
            'workmens-compensation' => 'WORKMENS COMPENSATION',
            'group-health-insurance' => 'GROUP HEALTH INSURANCE',
            'group-personal-accident' => 'GROUP PERSONAL ACCIDENT',
            'professional-indemnity' => 'PROFESSIONAL INDEMNITY-DOCTORS,ENGINEERS,C.A.,MISCELLANEOUS',
            'surety-bond' => 'SURETY BOND-BID AND PERFORMANCE',
            'trade-credit' => 'TRADE CREDIT',
            'event-insurance' => 'EVENT INSURANCE',
            'places-of-worship-insurance' => 'PLACES OF WORSHIP INSURANCE',
            'interior-insurance' => 'INTERIOR INSURANCE',
            'extended-warranty-insurance' => 'EXTENDED WARRANTY INSURANCE',
            'jellers-block-insurance' => 'JELLERS BLOCK INSURANCE',
            'art-insurance' => 'ART INSURANCE',
            'aviation-hull-liability' => 'AVIATION HULL AND LIABILITY INSURANCE',
            'retail-cyber-insurance' => 'RETAIL CYBER INSURANCE',
        ];

        if (!isset($services[$slug])) {
            abort(404);
        }

        return view('services.show', [
            'title' => $services[$slug],
            'slug' => $slug,
            'allServices' => $services
        ]);
    })->name('show');
});
