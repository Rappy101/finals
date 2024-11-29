<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\editController;
use App\Http\Controllers\statusController;
use Illuminate\Support\Facades\Route;

// Load the home view
Route::get('/', function () {
    return view('home');
});

// Authentication route
Route::post('/login', [AuthController::class, 'login']);

// Dashboard view
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Resume route
Route::get('/resume', [resumeController::class, 'index'])->name('resume');


// In web.php

Route::get('/edit', [EditController::class, 'index'])->name('edit');
Route::post('/save-profile', [EditController::class, 'saveProfile'])->name('save-profile');

//status

Route::get('/status', [statusController::class, 'index'])->name('status');
