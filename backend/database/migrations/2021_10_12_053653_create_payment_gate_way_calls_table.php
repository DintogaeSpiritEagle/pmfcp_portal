<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentGateWayCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_gate_way_calls', function (Blueprint $table) {
            $table->id();
            $table->json('ipg_request');
            $table->json('ipg_response');
            $table->string('requestor_ip');
            $table->string('requestor_platform');
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
        Schema::dropIfExists('payment_gate_way_calls');
    }
}
