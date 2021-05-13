<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class DashboardController extends Controller
{
    
    public function index()
    {
        $customers = Customer::orderBy('sales_ytd', 'DESC')->get();

        return view('pages/welcome', ['customers' => $customers]);
    }

    /**
     * GET /books/{slug}
     * Show the details for an individual book
     */
    public function show($slug)
    {
        $customer = Customer::findBySlug($slug);

        if (!$customer) {
            return redirect('/')->with(['flash-alert' => 'Customer not found.']);
        }
    
        return view('pages/show', [
            'customer' => $customer
        ]);
    }

}