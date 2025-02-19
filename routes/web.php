<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ProfileController; // Importing ProfileController
use Illuminate\Support\Facades\Route;

// Guest Routes - Not authenticated yet
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');
 

    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, 'verify'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');
    
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');
    
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    
   Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Other routes

// Default home route (accessible by anyone)
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/adminsection/admin', function () {
    return view('profile.adminsection.admin'); 
})->name('adminsection.admin');

// Apprentices Section Routes (visible after login)
Route::get('/apprenticesection/apprentice', function () {
    return view('profile.ApprenticeSection.apprentice'); 
})->name('apprenticesection.apprentice');

Route::get('apprentice/dashboard', function () {
    return view('apprentice.dashboard');  
})->name('apprentice.dashboard');

// Profile-related Routes (auth middleware to access)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';
