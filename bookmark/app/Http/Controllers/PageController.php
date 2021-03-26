<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * GET /
     */
    public function index()
    {
        $searchResults = session('searchResults', null);

        return view('pages/welcome', [
            'searchResults' => $searchResults
            ]);
    }

    /**
     * GET /support
     */
    public function support()
    {
        return view('pages/support');
    }
}