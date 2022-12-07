<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Casestudy2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('candidates',function(Blueprint $table){
            $table->bigIncrements('Id');
            $table->string('Username');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Password');
            $table->boolean('Admin')->default(0);
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
        //
    }
}
