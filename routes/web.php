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
use App\Http\Controllers\ApprenticeshipController;
use App\Http\Controllers\EmployerController;


// Guest Routes - Not authenticated yet
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

// Authenticated Routes
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

    Route::get('/apprenticesection/dashboard', function () {
        return view('profile.ApprenticeSection.dashboard');
    })->name('apprentice.dashboard');

    Route::get('/adminsection/admin', function () {
        return view('profile.AdminSection.admin');
    })->name('admin.dashboard');
});


// Other routes

// Default home route (accessible by anyone)
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/adminsection/admin', function () {
    return view('profile.adminsection.admin'); 
})->name('adminsection.admin');

Route::get('/employersection/employer', function () {
    return view('profile.employerSection.employer'); 
})->name('employersection.employer');


// -----------------------------------------  Apprentices Section Routes (visible after login) ------------------------------------
Route::get('/apprenticesection/apprentice', function () {
    return view('profile.ApprenticeSection.apprentice'); 
})->name('apprenticesection.apprentice');

Route::get('/apprenticesection/dashboard', function () {
    return view('profile.ApprenticeSection.dashboard'); 
})->name('apprenticesection.dashboard');


// ---------------------------------- Profile-related Routes (auth middleware to access) -----------------------------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';




// ---------------------------------------------------------- Admin Section Routes ----------------------------------------------

Route::get('/adminsection/add-apprentice', function () {
    return view('profile.AdminSection.add-apprentice'); 
})->name('adminsection.add-apprentice');

Route::get('/adminsection/view-apprentice', function () {
    return view('profile.AdminSection.view-apprentice'); 
})->name('adminsection.view-apprentice');

Route::get('/adminsection/add-apprenticeship', function () {
    return view('profile.AdminSection.add-apprenticeship'); 
})->name('adminsection.add-apprenticeship');

Route::get('/adminsection/view-apprenticeship', function () {
    return view('profile.AdminSection.view-apprenticeship'); 
})->name('adminsection.view-apprenticeship');

Route::get('/adminsection/add-employer', function () {
    return view('profile.AdminSection.add-employer'); 
})->name('adminsection.add-employer');

Route::get('/adminsection/view-employer', function () {
    return view('profile.AdminSection.view-employer'); 
})->name('adminsection.view-employer');

Route::get('/adminsection/add-mentor', function () {
    return view('profile.AdminSection.add-mentor'); 
})->name('adminsection.add-mentor');

Route::get('/adminsection/view-mentor', function () {
    return view('profile.AdminSection.view-mentor'); 
})->name('adminsection.view-mentor');

Route::get('/adminsection/reports', function () {
    return view('profile.AdminSection.reports'); 
})->name('adminsection.reports');

Route::get('/adminsection/settings', function () {
    return view('profile.AdminSection.settings'); 
})->name('adminsection.settings');


Route::post('/adminsection/store-apprenticeship', [ApprenticeshipController::class, 'store'])
    ->name('adminsection.store-apprenticeship');

Route::get('/adminsection/view-apprenticeship', [ApprenticeshipController::class, 'index'])
    ->name('adminsection.view-apprenticeship');
    
Route::get('/adminsection/edit-apprenticeship/{id}', [ApprenticeshipController::class, 'edit'])
    ->name('adminsection.edit-apprenticeship');

    
    Route::get('/admin/add-employer', [EmployerController::class, 'createEmployer'])->name('adminsection.add-employer');
    Route::post('/admin/add-employer', [EmployerController::class, 'storeEmployer'])->name('adminsection.store-employer');
    



// -------------------------------------------- Mentors Section Routes (visible after login) -----------------------------------
Route::get('/mentorsection/mentor', function () {
    return view('profile.MentorSection.Mentor'); 
})->name('mentorsection.mentor');