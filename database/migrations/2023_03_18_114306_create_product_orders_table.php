<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('invoice_id');
            $table->string('shipping_address');
            $table->string('town');
            $table->string('country')->default('Nigeria');

            $table->string('status');
            $table->string('est_delivery_date');
            $table->string('phone')->nullable();


            $table->string('postalCode')->nullable();
            $table->string('email')->nullable();
            $table->string('orderNotes')->nullable();

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
        Schema::dropIfExists('product_orders');
    }
}
