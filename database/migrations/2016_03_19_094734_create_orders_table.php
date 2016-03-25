<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_address');
            $table->string('sender_postal_code');
            $table->string('sender_city');
            $table->string('sender_country');
            $table->string('sender_tel');

            $table->string('recipient_name');
            $table->string('recipient_address');
            $table->string('recipient_postal_code');
            $table->string('recipient_city');
            $table->string('recipient_country');
            $table->string('recipient_tel');

            $table->float('real_weight');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->string('type_colis');
            $table->float('dim_weight');
            $table->float('buy_weight');
            $table->boolean('insurance');
            $table->decimal('insurance_amount',10,2);

            $table->decimal('amount',10,2);
            $table->string('status')->default(0);
            $table->string('code');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
