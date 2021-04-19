<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class DashboardController extends Controller
{
    
    public function index()
    {
        $customerList = $this->populateCustomerList();

        return view('welcome', ['customers' => $customerList]);
    }

    private function populateCustomerList()
    {
        if (($handle = fopen ( public_path () . '/csv/p3.csv', 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
    
            $csv_data = new Customer ();
            $csv_data->cust_number = $data[3];
            $csv_data->cust_name = $data[4];
            $csv_data->cust_city = $data[5];
            $csv_data->cust_state = $data[6];
            $csv_data->cust_zip = $data[7];
            $csv_data->sales_ytd = str_replace(['$', ',', '-', ' '], '', $data[8]);
            $csv_data->gpdollars_ytd = str_replace(['$', ',', ' '], '', $data[9]);
            $csv_data->gppercent_ytd = str_replace(['$', ',', ' '], '', $data[10]);
            $csv_data->save ();
    
            }
            fclose ( $handle );

            return $csv_data::all();
        }
    }
}