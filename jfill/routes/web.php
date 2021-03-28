<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JfillController;

Route::get('/', [JfillController::class, 'index']);
Route::post('/process', [JfillController::class, 'process']);