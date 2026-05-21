<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IjazahController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/ijazah', [IjazahController::class, 'index'])->name('ijazah.index');
Route::get('/ijazah/create', [IjazahController::class, 'create'])->name('ijazah.create');
Route::post('/ijazah', [IjazahController::class, 'store'])->name('ijazah.store');
Route::get('/ijazah/{id}', [IjazahController::class, 'show'])->name('ijazah.show');
Route::get('/ijazah/{id}/edit', [IjazahController::class, 'edit'])->name('ijazah.edit');
Route::put('/ijazah/{id}', [IjazahController::class, 'update'])->name('ijazah.update');
Route::delete('/ijazah/{id}', [IjazahController::class, 'destroy'])->name('ijazah.destroy');

