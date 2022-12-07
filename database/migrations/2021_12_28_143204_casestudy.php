<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Casestudy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->string('created_by');
            $table->string('status')->default("no");
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
        Schema::dropIfExists('employers');
    }
}
