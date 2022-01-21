<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studenApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// menampilkan data mahasiswa melalui API
Route::get('/mahasiswa', [studenApiController::class, 'index']);
Route::get('/mahasiswa/{id}', [studenApiController::class, 'getById']);
Route::get('/mahasiswa/by_nim/{nim}', [studenApiController::class, 'getByNIm']);

// menambahkan data mahasiswa melalui API
Route::post('/mahasiswa', [studenApiController::class, 'save']);

// mengubah data mahasiswa melalui API
Route::put('/mahasiswa/{id}', [studenApiController::class, 'update']);

// menghapus data mahasiswa melalui API
Route::delete('/mahasiswa/{id}', [studenApiController::class, 'delete']);