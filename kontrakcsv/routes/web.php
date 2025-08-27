<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pegawai;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Cabang;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', [Pegawai::class, 'index']);
Route::get('/pegawai/create', [Pegawai::class, 'create']);
Route::post('/pegawai/store', [Pegawai::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/edit/{id}', [Pegawai::class, 'edit']);
Route::post('/pegawai/update/{id}', [Pegawai::class, 'update'])->name('pegawai.update');
Route::post('/pegawai/destroy/{id}', [Pegawai::class, 'destroy'])->name('pegawai.destroy');

Route::get('/jabatan', [Jabatan::class, 'index'])->name('jabatan.index');
