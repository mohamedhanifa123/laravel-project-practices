<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joins', function (Blueprint $table)
         {
            $table->id();
            $table->string('companyname');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('form')->onDelete('cascade');
           // $table->foreign('user_id')->references('id')->on('form')->onDelete('cascade');
        
            $table->string('address');
        
        
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
        Schema::dropIfExists('joins');
    }
}
