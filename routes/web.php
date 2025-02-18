<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/loginpage', function () {
    return view('loginpage');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/apprenticesection/apprentice', function () {
    return view('profile.ApprenticeSection.apprentice'); 
})->name('apprenticesection.apprentice');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';
