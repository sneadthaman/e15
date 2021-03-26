<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JfillController extends Controller
{
    /**
     * GET /
     */
    public function index()
    {
        return view('welcome');
    }
}