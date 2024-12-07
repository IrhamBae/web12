<?php

use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PegawaiController::class, 'display'])->name('pegawai.display');

Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');

Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');

Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');

Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');

Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
