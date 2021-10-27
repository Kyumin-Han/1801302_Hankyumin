<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\Subjectcontroller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/lecture', [LectureController::class, 'index'])->name('lecture');

Route::middleware(['auth:sanctum', 'verified'])->get('/subjectlist', [Subjectcontroller::class, 'index'])->name('subjectlist');

Route::middleware(['auth:sanctum', 'verified'])->get('/applysubject', [ApplyController::class, 'index'])->name('applysubject');

Route::middleware(['auth:sanctum', 'verified'])->post('/applysubject/newsubject', [ApplyController::class, 'store']);