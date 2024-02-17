<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/admin', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('dashboard');

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('dashboard');
Route::get('/admin/dashboard/{project}', [App\Http\Controllers\Admin\ProjectController::class, 'show'])  ->name('project.show')                     ;
