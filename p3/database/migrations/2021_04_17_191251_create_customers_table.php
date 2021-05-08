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
            $table->string('slug');
            $table->string('cust_name');
            $table->string('cust_number');
            $table->string('cust_city');
            $table->string('cust_state');
            $table->string('cust_zip');
            $table->float('sales_ytd', null)->nullable();
            $table->float('gpdollars_ytd', null)->nullable();
            $table->float('gppercent_ytd', null)->nullable();
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