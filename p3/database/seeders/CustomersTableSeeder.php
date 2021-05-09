<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Customer;
use Carbon\Carbon;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addAllCustomersFromJsonFile();
    }

    private function addAllCustomersFromJsonFile()
    {
        $customerData = file_get_contents(database_path('customers.json'));
        $customers = json_decode($customerData, true);

        $count = count($customers);

        foreach ($customers as $slug => $customerData) {
            $customer = new Customer();

            $customer->created_at = Carbon::now()->subDays($count)->toDateTimeString();
            $customer->updated_at = Carbon::now()->subDays($count)->toDateTimeString();
            $customer->slug = $slug;
            $customer->cust_name = $customerData['cust_name'];
            $customer->cust_number = $customerData['cust_number'];
            $customer->cust_city = $customerData['cust_city'];
            $customer->cust_state = $customerData['cust_state'];
            $customer->cust_zip = $customerData['cust_zip'];
            $customer->sales_ytd = $customerData['sales_ytd'];
            $customer->gpdollars_ytd = $customerData['gpdollars_ytd'];
            $customer->gppercent_ytd = $customerData['gppercent_ytd'];
            $customer->save();
            $count--;
        }

    }
}