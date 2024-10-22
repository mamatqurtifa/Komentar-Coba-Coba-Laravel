<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomentarController;

Route::get('/', [KomentarController::class, 'index'])->name('komentar.index');
Route::post('/komentar', [KomentarController::class, 'store'])->name('komentar.store');