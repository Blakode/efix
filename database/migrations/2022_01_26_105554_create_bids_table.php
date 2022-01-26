<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            //users exchange message under a post 
            $table->string('message');
            $table->enum('client_status',['approaved', 'rejected'])->nullable();
            $table->enum('artisan_status', ['pending', 'completed'])->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('request_id')->unsigned();
            $table->foreign('request_id')->references('id')->on('requests')->onDelete('cascade'); 
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
