<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('uuid')->unique();
            $table->string('buyer_name');
            $table->string('contract_no')->default('');
            $table->string('manufacturer', 20);
            $table->string('address', 255)->default('');
            $table->string('email', 255)->default('');
            $table->string('registration_no', 20)->default('');
            $table->string('model', 10);
            $table->string('colour', 10)->default('');
            $table->integer('total_price');
            $table->integer('last_mileage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
