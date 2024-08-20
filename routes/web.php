<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDetailsController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    //Home
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Settings
    Route::get('/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
    //Users
    Route::resource('users', UserDetailsController::class);

});
