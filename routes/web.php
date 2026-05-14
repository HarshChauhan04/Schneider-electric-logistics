<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// ── Main Page ──────────────────────────────────────────────────────────────
Route::get('/', function () {
    return view('welcome');
})->name('home');

// ── Static Pages ───────────────────────────────────────────────────────────
Route::get('/about',          fn() => view('pages.about'))->name('about');
Route::get('/team',           fn() => view('pages.team'))->name('team');
Route::get('/features',       fn() => view('pages.features'))->name('features');
Route::get('/how-it-works',   fn() => view('pages.how-it-works'))->name('how-it-works');

// ── Auth Routes ────────────────────────────────────────────────────────────
Route::middleware('guest')->group(function () {
    Route::get('/login',    [LoginController::class,   'showForm'])->name('login');
    Route::post('/login',   [LoginController::class,   'login']);
    Route::get('/register', [RegisterController::class,'showForm'])->name('register');
    Route::post('/register',[RegisterController::class,'register']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// ── Bookings (protected) ────────────────────────────────────────────────────
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store')->middleware('auth');

