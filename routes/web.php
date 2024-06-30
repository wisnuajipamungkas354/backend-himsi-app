<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/anggota/create', [AnggotaController::class, 'create']);
Route::post('/anggota/create', [AnggotaController::class, 'store']);
Route::get('/anggota/edit/{anggota:id}', [AnggotaController::class, 'edit']);
Route::patch('/anggota/edit/{anggota:id}', [AnggotaController::class, 'update']);
Route::delete('/anggota/delete', [AnggotaController::class, 'destroy']);
