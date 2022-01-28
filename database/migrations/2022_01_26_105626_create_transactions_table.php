<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('bid_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('bid_id')->references('id')->on('bids')->onDelete('cascade'); 
            $table->foreign('request_id')->references('id')->on('requests')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
