<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\LansiaApiController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [ApiController::class, 'authenticate']);
Route::post('/logout', [ApiController::class, 'logout'])->middleware('auth:sanctum');


Route::get('/lansia', [LansiaApiController::class, 'lansiaList'])->middleware('auth:sanctum');
Route::get('/lansia/{id}', [LansiaApiController::class, 'detail'])->middleware('auth:sanctum');

Route::post('/lansia/save', [LansiaApiController::class, 'save'])->middleware('auth:sanctum');

Route::get('/lansia/delete/{id}', [LansiaApiController::class, 'delete'])->middleware('auth:sanctum');

// Route::get('Lansia/delete/{id}', [LansiaControllerP::class, 'delete'])->name('lansia.petugas.delete')->middleware('cekAuth:petugas');





