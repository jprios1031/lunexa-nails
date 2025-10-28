<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\AdminController;

Route::get('/', [ReservaController::class, 'index'])->name('reservas.index');
Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');


Route::get('dashboard', [ReservaController::class, 'dashboard'])->name('dashboard');

Route::post('/reservas/{id}/aprobar', [ReservaController::class, 'aprobar'])->name('reservas.aprobar');
Route::post('/reservas/{id}/cancelar', [ReservaController::class, 'cancelar'])->name('reservas.cancelar');



Route::get('login', [AdminController::class, 'showLogin'])->name('login');
Route::post('login', [AdminController::class, 'login'])->name('login.submit');
Route::post('logout', [AdminController::class, 'logout'])->name('logout');

// Dashboard protegido
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard-reservas', [ReservaController::class, 'dashboard'])->name('reservas.dashboard');
});
