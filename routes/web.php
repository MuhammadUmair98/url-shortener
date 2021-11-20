<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [UrlController::class, 'index'])->name('dashboard');
    Route::post('/generate-short-link', [UrlController::class, 'store'])->name('generate.short.link');
    Route::get('{code}', [UrlController::class,'shortenLink'])->name('shorten.link');
});


