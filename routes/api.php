<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MakulController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    // Routes for Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
    Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update']);
    Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy']);
    
    // Routes for Dosen
    Route::get('/dosen', [DosenController::class, 'index']);
    Route::get('/dosen/{nidn}', [DosenController::class, 'show']);
    Route::post('/dosen', [DosenController::class, 'store']);
    Route::put('/dosen/{nidn}', [DosenController::class, 'update']);
    Route::delete('/dosen/{nidn}', [DosenController::class, 'destroy']);
    
    // Routes for Makul
    Route::get('/makul', [MakulController::class, 'index']);
    Route::get('/makul/{kodematkul}', [MakulController::class, 'show']);
    Route::post('/makul', [MakulController::class, 'store']);
    Route::put('/makul/{kodematkul}', [MakulController::class, 'update']);
    Route::delete('/makul/{kodematkul}', [MakulController::class, 'destroy']);
});

