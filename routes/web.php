<?php

use App\Http\Controllers\Admin\BillingController;
use App\Http\Controllers\Admin\ConsumerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Landing Page
Route::get('/', [HomeController::class, 'homePage'])->name('homePage');

// User Side
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'userPage'])->name('userPage');
    // Feedback
    Route::get('feedback', [FeedbackController::class, 'create'])->name('feedback.create');
    Route::post('feedback', [FeedbackController::class, 'store'])->name('feedback.store');
});

// Admin Side
Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Consumer
    Route::get('consumers', [ConsumerController::class, 'index'])->name('consumers.index');
    Route::get('consumers/{id}', [ConsumerController::class, 'edit'])->name('consumers.edit');
    Route::put('consumers/{id}', [ConsumerController::class, 'update'])->name('consumers.update');
    Route::delete('consumers/{id}', [ConsumerController::class, 'destroy'])->name('consumers.destroy');

    // Feedback
    Route::get('feedback', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::delete('feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
    
    // Billing
    Route::get('billings', [BillingController::class, 'index'])->name('billings.index');
});
