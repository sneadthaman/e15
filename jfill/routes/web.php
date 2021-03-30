<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\JfillController;
use App\Mail\ConfirmMail;
use App\Mail\RequestMail;

Route::get('/', [JfillController::class, 'index']);
Route::post('/process', [JfillController::class, 'process']);

Route::get('/email', function() {
    return new ConfirmMail();
});