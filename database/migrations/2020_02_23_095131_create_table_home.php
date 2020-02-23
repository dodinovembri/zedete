<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text_title_one')->nullable();
            $table->string('text_title_two')->nullable();
            $table->string('link_get_started')->nullable();
            $table->string('text_below_title_one')->nullable();
            $table->string('text_below_title_two')->nullable();
            $table->string('text_paragraph')->nullable();
            $table->string('call_us_now')->nullable();        
            $table->string('email_us_now')->nullable();        
            $table->string('created_by')->nullable();        
            $table->string('updated_by')->nullable();        
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
        Schema::dropIfExists('home');
    }
}
