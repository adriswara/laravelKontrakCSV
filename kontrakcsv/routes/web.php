<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pegawai;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Cabang;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', [Pegawai::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [Pegawai::class, 'create'])->name('pegawai.create');
Route::post('/pegawai/store', [Pegawai::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/edit/{id}', [Pegawai::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/update/{id}', [Pegawai::class, 'update'])->name('pegawai.update');
Route::post('/pegawai/destroy/{id}', [Pegawai::class, 'destroy'])->name('pegawai.destroy');

Route::get('/jabatan', [Jabatan::class, 'index'])->name('jabatan.index');
Route::get('/jabatan/create', [Jabatan::class, 'create'])->name('jabatan.create');
Route::post('/jabatan/store', [Jabatan::class, 'store'])->name('jabatan.store');
Route::get('/jabatan/edit/{id}', [Jabatan::class, 'edit'])->name('jabatan.edit');
Route::put('/jabatan/update/{id}', [Jabatan::class, 'update'])->name('jabatan.update');
Route::post('/jabatan/destroy/{id}', [Jabatan::class, 'destroy'])->name('jabatan.destroy');

Route::get('/cabang', [Cabang::class, 'index'])->name('cabang.index');
Route::get('/cabang/create', [Cabang::class, 'create'])->name('cabang.create');
Route::post('/cabang/store', [Cabang::class, 'store'])->name('cabang.store');
Route::get('/cabang/edit/{id}', [Cabang::class, 'edit'])->name('cabang.edit');
Route::put('/cabang/update/{id}', [Cabang::class, 'update'])->name('cabang.update');
Route::delete('/cabang/destroy/{id}', [Cabang::class, 'destroy'])->name('cabang.destroy');
