<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/reservation', [ReservationController::class, 'show'])->name('reservation.show');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');

// Admin Routes
Route::prefix('admin')->group(function(){
    Route::get('login', [DashboardController::class, 'login'])->name('admin.login');
    Route::post('login', [DashboardController::class, 'store'])->name('admin.login.post');

    Route::group(['middleware' => 'admin'], function(){
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('reservations/{reservation}/contacted', [DashboardController::class, 'markContacted'])->name('admin.mark-contacted');
        Route::delete('reservations/{reservation}', [DashboardController::class, 'deleteReservation'])->name('admin.delete-reservation');
        Route::post('logout', [DashboardController::class, 'destroy'])->name('admin.logout');
    });
});

// Language Switcher
Route::get('/locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('locale.switch');
