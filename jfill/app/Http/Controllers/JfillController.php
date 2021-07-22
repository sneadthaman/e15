<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmMail;
use App\Mail\RequestMail;

class JfillController extends Controller
{
    /**
     * GET /
     */
    public function index()
    {
        return view('pages/welcome');
    }

    // public function processed()
    // {
    //     return view('pages/processed');
    // }

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
            'custAddress' => 'required',
            'numOfUnits' => 'required|min:1'
        ]);
        $custName = $request->input('custName', null);
        $custPhone = $request->input('custPhone', null);
        $custEmail = $request->input('custEmail', null);
        $custAddress = $request->input('custAddress', null);
        // Default unitType to quattro since it is the most popular
        $unitType = $request->input('unitType', 'quattro');
        $numOfUnits = $request->input('numOfUnits', 1);
        $unitDesc = $request->input('unitDesc', null);

        $data = [
            'customer_name' => $custName,
            'customer_phone' => $custPhone,
            'customer_email' => $custEmail,
            'customer_address' => $custAddress,
            'unit_type' => $unitType,
            'number_units' => $numOfUnits,
            'description' => $unitDesc
        ];

        Mail::to($custEmail)->send(new ConfirmMail());
        Mail::to('info@janvey.com')->send(new RequestMail($data));
        
        return redirect('/email');
    }
}