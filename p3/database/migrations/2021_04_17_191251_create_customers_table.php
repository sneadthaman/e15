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
            $table->integer('salesperson_code')->nullable();
            $table->string('salesperson_name')->nullable();
            $table->integer('cust_category')->nullable();
            $table->string('cust_number');
            $table->string('cust_name');
            $table->string('cust_city');
            $table->string('cust_state');
            $table->string('cust_zip');
            $table->float('sales_ytd', null)->nullable();
            $table->float('gpdollars_ytd', null)->nullable();
            $table->float('gppercent_ytd', null)->nullable();
            $table->float('last_year_sales', null)->nullable();
            $table->float('last_year_gp', null)->nullable();
            $table->float('last_year_gppercent', null)->nullable();
            $table->string('last_invoice_date', null)->nullable();
            $table->string('last_payment_date', null)->nullable();
            $table->float('ar_balance', null)->nullable();
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