<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LoginPage');
});

Route::get('/dashboard', function () {
    return view('Admin.DashboardPage');
});

Route::get('/manajemen-agenda', function () {
    return view('Admin.ManajemenAgenda');
});

Route::get('/manajemen-infaq', function () {
    return view('Admin.ManajemenInfaq');
});

Route::get('/laporan-agenda', function () {
    return view('Admin.LaporanAgenda');
});

Route::get('/laporan-infaq', function () {
    return view('Admin.LaporanInfaq');
});

Route::get('/landing', function () {
    return view('LandingPage');
});

Route::get('/agenda', function () {
    return view('AgendaKegiatan');
});

Route::get('/infaq', function () {
    return view('Infaq');
});

Route::get('/waktu-sholat', function () {
    return view('WaktuSholat');
});

