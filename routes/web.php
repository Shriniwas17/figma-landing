<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', [LeadController::class, 'create'])->name('landing');
Route::post('/submit', [LeadController::class, 'store'])->name('lead.store');

Route::get('/dashboard', [LeadController::class, 'index'])->name('dashboard');
Route::delete('/lead/{id}', [LeadController::class, 'destroy'])->name('lead.delete');
