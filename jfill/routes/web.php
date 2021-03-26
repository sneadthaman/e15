<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Eventually we'll want to return a view with our customized home page.
    // For now, we’ll just return a simple string
    return '<h1>J-Fill Service Request</h1>';
});