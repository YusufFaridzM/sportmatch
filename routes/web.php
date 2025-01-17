<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FutsalScheduleController;
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

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/sport', function () {
    return view('sport');
});

Route::get('/futsal', function () {
    return view('futsal');
});
Route::post('/futsal-schedules/{id}/challenge', [FutsalScheduleController::class, 'challenge'])->name('futsal-schedules.challenge');

Route::get('/futsal-schedules/index', [FutsalScheduleController::class, 'index'])->name('futsal-schedules.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/futsal-schedules', [FutsalScheduleController::class, 'index'])->name('futsal-schedules.index');
    Route::get('/futsal-schedules/create', [FutsalScheduleController::class, 'create'])->name('futsal-schedules.create');
    Route::post('/futsal-schedules', [FutsalScheduleController::class, 'store'])->name('futsal-schedules.store');
});
Route::delete('/futsal-schedules/{id}', [FutsalScheduleController::class, 'destroy'])->name('futsal-schedules.destroy');


// Routes with Auth Middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include Auth Routes
require __DIR__ . '/auth.php';
