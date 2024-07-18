<?php

use App\Http\Controllers\ParticipantController;

Route::get('/', [ParticipantController::class, 'index'])->name('participants.index');
Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create');
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store');
Route::get('/participants/{id}/edit', [ParticipantController::class, 'edit'])->name('participants.edit');
Route::put('/participants/{id}', [ParticipantController::class, 'update'])->name('participants.update');
Route::delete('/participants/{id}', [ParticipantController::class, 'destroy'])->name('participants.destroy');
Route::get('/participants/export', [ParticipantController::class, 'export'])->name('participants.export');
