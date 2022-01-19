<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * An ID. This will be the table's primary key.
 * The details of the order.
 * The name of the client who placed the order.
 * Whether or not the order has been fulfilled.
 * When the order was created and updated, created_at and updated_at, provided by the timestamps function.
 */
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
            $table->id();
            $table->text('details');
            $table->string('client');
            $table->boolean('is_fulfilled')->default(false);
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
