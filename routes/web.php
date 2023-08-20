<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungHurufController;
use App\Http\Controllers\PatternCountController;
use App\Http\Controllers\UrutkanArrayController;
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


// dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

// urutkan array
Route::get('urutkan_array', [UrutkanArrayController::class, 'index'])->name('urutkan_array.index');

// pattern count
Route::get('pattern_count', [PatternCountController::class, 'index'])->name('pattern_count.index');
Route::post('pattern_count/proses', [PatternCountController::class, 'patternCount'])->name('pattern_count.proses');

// hitung huruf 
Route::get('hitung_huruf', [HitungHurufController::class, 'index'])->name('hitung_huruf.index');
Route::post('hitung_huruf/proses', [HitungHurufController::class, 'countLetters'])->name('hitung_huruf.proses');
