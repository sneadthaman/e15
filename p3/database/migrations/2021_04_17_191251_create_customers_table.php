<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('salesperson_code');
            $table->string('salesperson_name');
            $table->integer('cust_category');
            $table->integer('cust_number');
            $table->string('cust_name');
            $table->string('cust_city');
            $table->string('cust_state');
            $table->string('cust_zip');
            $table->float('sales_ytd')->nullable();
            $table->float('gpdollars_ytd')->nullable();
            $table->float('gppercent_ytd')->nullable();
            $table->float('last_year_sales')->nullable();
            $table->float('last_year_gp')->nullable();
            $table->float('last_year_gppercent')->nullable();
            $table->string('last_invoice_date')->nullable();
            $table->string('last_payment_date')->nullable();
            $table->float('ar_balance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}