<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MahasiswaController::class,'index']);
Route::get('/Details/{id}', [MahasiswaController::class,'show']);
Route::get('/add-new', [MahasiswaController::class,'create']);
Route::post('/adding-data', [MahasiswaController::class,'store']);
Route::get('/delete/{id}', [MahasiswaController::class,'delete']);
Route::delete('/delete/{id}', [MahasiswaController::class,'destroy']);
Route::get('/updating/{id}', [MahasiswaController::class,'edit']);
Route::put('/updating/{id}', [MahasiswaController::class,'update']);
