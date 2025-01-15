<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman olahraga
Route::get('/sport', function () {
    return view('sport');
});

// Halaman khusus olahraga
Route::get('/futsal', function () {
    return view('futsal');
});
Route::get('/football', function () {
    return view('football');
});
Route::get('/volly', function () {
    return view('volly');
});
Route::get('/badminton', function () {
    return view('badminton');
});
Route::get('/tennis', function () {
    return view('tennis');
});

// Halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes untuk jadwal pertandingan
Route::middleware('auth')->group(function () {
    // Resource routes untuk CRUD jadwal
    Route::resource('schedules', ScheduleController::class);

    // Route tambahan untuk pencarian jadwal
    Route::get('schedules/search', [ScheduleController::class, 'search'])->name('schedules.search');
});

// Routes untuk profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Tambahkan auth routes (register, login, dll.)
require __DIR__ . '/auth.php';