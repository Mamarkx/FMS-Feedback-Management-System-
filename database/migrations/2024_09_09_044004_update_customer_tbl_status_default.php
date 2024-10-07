<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCustomerTblStatusDefault extends Migration
{
    public function up()
    {
        Schema::table('customer_tbl', function (Blueprint $table) {
            $table->string('Status')->default('0')->change();
        });
    }

    public function down()
    {
        Schema::table('customer_tbl', function (Blueprint $table) {
            $table->string('Status')->nullable()->change();
        });
    }
}

