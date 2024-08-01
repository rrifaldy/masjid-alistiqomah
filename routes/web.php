<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\InfaqController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('LoginPage');
});

Route::get('/dashboard', function () {
    return view('Admin.DashboardPage');
});

Route::get('/manajemen-agenda', [AgendaController::class, 'index'])->name('manajemen-agenda');
Route::post('/manajemen-agenda', [AgendaController::class, 'store'])->name('manajemen-agenda.store');
Route::put('/manajemen-agenda', [AgendaController::class, 'update'])->name('manajemen-agenda.update');
Route::post('/manajemen-agenda/selesai', [AgendaController::class, 'selesai'])->name('manajemen-agenda.selesai');
Route::post('/manajemen-agenda/hapus', [AgendaController::class, 'destroy'])->name('manajemen-agenda.destroy');

Route::get('/manajemen-infaq', [InfaqController::class, 'index'])->name('manajemen-infaq');
Route::post('/manajemen-infaq', [InfaqController::class, 'store'])->name('manajemen-infaq.store');
Route::put('/manajemen-infaq', [InfaqController::class, 'update'])->name('manajemen-infaq.update');
Route::delete('/manajemen-infaq', [InfaqController::class, 'destroy'])->name('manajemen-infaq.destroy');

Route::get(
    '/laporan-agenda',
    [AgendaController::class, 'laporan']
)->name('manajemen-agenda.laporan');

Route::get(
    '/laporan-infaq',
    [InfaqController::class, 'laporan']
)->name('manajemen-infaq.laporan');

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/agenda', function () {
    return view('AgendaKegiatan');
});

Route::get('/infaq', function () {
    return view('Infaq');
});

Route::post(
    '/infaq',
    [InfaqController::class, 'input']
)->name('infaq.store');

Route::get('/waktu-sholat', function () {
    return view('WaktuSholat');
});
