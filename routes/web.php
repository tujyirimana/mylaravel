<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Ensure this line matches the namespace and class name of your ProductController

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route (Protected by 'auth' and 'verified' middleware)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Profile Routes (Allows users to edit, update, or delete their profiles)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Product Routes (Product CRUD)
    Route::resource('products', ProductController::class);  // Ensure ProductController exists in the specified namespace
});

// Default Authentication Routes (Login, Register, etc.)
require __DIR__ . '/auth.php';