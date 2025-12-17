<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/leads', [LeadController::class, 'index']);
Route::post('/leads', [LeadController::class, 'store']);
Route::put('/leads/{lead}', [LeadController::class, 'update']);
Route::delete('/leads/{lead}', [LeadController::class, 'destroy']);
