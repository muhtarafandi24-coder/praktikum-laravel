<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Surat Masuk
//Route::get('/surat-masuk', [SuratMasukController::class, 'index'])
 //   ->name('surat-masuk.index');

//Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])
 //   ->name('surat-masuk.show');

// Surat Keluar
//Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])
  //  ->name('surat-keluar.index');

//Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])
  //  ->name('surat-keluar.show');

Route::resource('/surat-masuk', SuratMasukController::class)
    ->parameters(['surat-masuk' => 'id'])
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::resource('/surat-keluar', SuratKeluarController::class)
    ->parameters(['surat-keluar' => 'id'])
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);