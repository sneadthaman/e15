<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class DashboardController extends Controller
{
    
    public function index()
    {
        $customerList = $this->populateCustomerList();

        return view('welcome')->with($customerList);
    }

    private function populateCustomerList()
    {
        if (($handle = fopen ( public_path () . '/csv/p3.csv', 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
    
            $csv_data = new Customer ();
            //$csv_data->id = $data [0];
            $csv_data->cust_number = $data [6];
            $csv_data->cust_name = $data [7];
            $csv_data->cust_city = $data [8];
            $csv_data->cust_state = $data [9];
            $csv_data->cust_zip = $data [10];
            $csv_data->sales_ytd = $data [11];
            $csv_data->gpdollars_ytd = $data [12];
            $csv_data->gppercent_ytd = $data [13];
            $csv_data->last_invoice_date = $data [14];
            $csv_data->last_payment_date = $data [15];
            $csv_data->ar_balance = $data [16];
            $csv_data->save ();
    
            }
            fclose ( $handle );

            return $finalData = $csv_data::all();
        }
    }
}