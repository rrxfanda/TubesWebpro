<?php

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/add-event', [EventController::class, 'create'])->name('event.create');
Route::post('/add-event', [EventController::class, 'store'])->name('event.store');
