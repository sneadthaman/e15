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
        return view('pages/welcome');
    }

    public function processed()
    {
        return view('pages/processed');
    }

    /**
     * POST /
     * Action when 'Send Request' button is pressed and data is submitted
     */
    public function process(Request $request)
    {
        /* Validate input data */
        $request->validate([
            'custName' => 'required',
            'custPhone' => 'required|min:7',
            'custEmail' => 'required|email',
            'numOfUnits' => 'required|min:1'
        ]);
        $custName = $request->input('custName', null);
        $custPhone = $request->input('custPhone', null);
        $custEmail = $request->input('custEmail', null);
        // Default unitType to quattro since it is the most popular
        $unitType = $request->input('unitType', 'quattro');
        $numOfUnits = $request->input('numOfUnits', 1);
        $unitDesc = $request->input('unitDesc', null);
        
        return view('pages/processed')->with([
            'custName' => $custName,
            'custPhone' => $custPhone,
            'custEmail' => $custEmail,
            'unitType' => $unitType,
            'numOfUnits' => $numOfUnits,
            'unitDesc' => $unitDesc
        ]);
    }
}