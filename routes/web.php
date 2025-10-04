<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\TodoController::class, 'index']);
Route::post('/', [App\Http\Controllers\TodoController::class, 'store'])->name('todo.store');
Route::post('/selesai/{id}', [App\Http\Controllers\TodoController::class, 'taskSelesai'])->name('todo.selesai');
Route::post('/belum/{id}', [App\Http\Controllers\TodoController::class, 'taskBelum'])->name('todo.belum');
Route::post('/hapus/{id}', [App\Http\Controllers\TodoController::class, 'destroy'])->name('todo.hapus');
