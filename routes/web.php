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
Route::get('/day/{day}', [\App\Http\Controllers\PublicController::class, 'showByDay'])->name('showByDay');
Route::get('/partita/{id}', [\App\Http\Controllers\PublicController::class, 'showPartita'])->name('showPartita');
Route::get('/getPartita/{id}', [\App\Http\Controllers\PublicController::class, 'getPartita'])->name('getPartita');
Route::get('/incrementGoals/{id}/{team}', [\App\Http\Controllers\AdminController::class, 'incrementGoals'])->name('incrementGoals');
Route::get('/decrementGoals/{id}/{team}', [\App\Http\Controllers\AdminController::class, 'decrementGoals'])->name('decrementGoals');
Route::get('/startPartita/{id}', [\App\Http\Controllers\AdminController::class, 'startPartita'])->name('startPartita');
Route::get('/closePartita/{id}', [\App\Http\Controllers\AdminController::class, 'closePartita'])->name('closePartita');
Route::get('/restartPartita/{id}', [\App\Http\Controllers\AdminController::class, 'restartPartita'])->name('restartPartita');


// Route::get('login', function () {
//     return view('home');
// })->name('login');


//Auth::routes();

Route::get('/login', function () {return view('auth.login');})->name('login');
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/authentication', [\App\Http\Controllers\Auth\LoginController::class, 'authentication'])->name('authentication');


// esp32 Routes
Route::get('/increment/{team}/{token}', [\App\Http\Controllers\PublicController::class, 'increment'])->name('increment');
Route::get('/decrement/{team}/{token}', [\App\Http\Controllers\PublicController::class, 'decrement'])->name('decrement');
