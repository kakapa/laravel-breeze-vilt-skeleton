<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\MustVerifyMobileNumber;
use App\Http\Middleware\UpdateProfileOfNewlyRegisteredUser;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::inertia('/about', 'About')->name('about');

Route::inertia('/contact', 'Contact')->name('contact');

Route::inertia('/resume', 'Resume', [
    'name' => 'Molotsi Paul Pilane'
])->name('resume');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', MustVerifyMobileNumber::class, 'verified', UpdateProfileOfNewlyRegisteredUser::class])
    ->group(function () {
        Route::inertia('/dashboard', 'Dashboard')->name('dashboard');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
