<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotifikasiController;

Route::get('/', [NotifikasiController::class, 'index']);
Route::get('/notifkasi', [NotifikasiController::class, 'index']);
