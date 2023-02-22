<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [\App\Http\Controllers\PublicController::class, 'showHome'])->name('home');
Route::get('/{day}', [\App\Http\Controllers\PublicController::class, 'showByDay'])->name('showByDay');
// Route::get('/day2', [\App\Http\Controllers\PublicController::class, 'showDay2'])->name('day2');
// Route::get('/day3', [\App\Http\Controllers\PublicController::class, 'showDay3'])->name('day3');
// Route::get('/day4', [\App\Http\Controllers\PublicController::class, 'showDay4'])->name('day4');

Route::get('login', function () {
    return view('home');
})->name('login');

