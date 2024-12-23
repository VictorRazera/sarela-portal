<?php

use App\Http\Controllers\FinancialReportController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
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

Route::get('/', function () {
    return redirect('login');
});

Route::get('/dashboard', [NewsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/financial-reports', [FinancialReportController::class, 'index'])->middleware(['auth', 'verified'])->name('financial-reports');

Route::get('/reports/{name}', [ReportController::class, 'index'])->name('reports.index');

Route::get('/members', [MemberController::class, 'index'])->middleware(['auth', 'verified'])->name('members');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
