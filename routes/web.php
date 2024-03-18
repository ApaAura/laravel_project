<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ObjectsController;

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

//Guest
Route::get('/', [GuestController::class, 'index'])->name('guest.index');

//Dashboard
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Route::resource('collections', ObjectsController::class)->middleware('auth');
});