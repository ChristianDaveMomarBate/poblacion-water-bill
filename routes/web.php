<?php

use App\Http\Controllers\Admin\ConsumerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'homePage'])->name('homePage');
Route::get('/home', [HomeController::class, 'userPage'])->name('userPage')->middleware('auth');

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('consumers', [ConsumerController::class, 'index'])->name('consumers.index');
    Route::get('consumers/{id}', [ConsumerController::class, 'edit'])->name('consumers.edit');
    Route::put('consumers/{id}', [ConsumerController::class, 'update'])->name('consumers.update');
    Route::delete('consumers/{id}', [ConsumerController::class, 'destroy'])->name('consumers.destroy');
});
