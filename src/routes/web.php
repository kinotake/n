<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
 Route::get('/confirm', [ContactController::class, 'confirm']);
 Route::post('/confirm', [ContactController::class, 'confirm']);
 Route::post('/confirm', [ContactController::class, 'create']);
 Route::get('/thanks', [ContactController::class, 'thanks']);
 Route::get('/administrator', [ContactController::class, 'administrator']);
 Route::delete('/administrator', [ContactController::class, 'destroy']);