<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessmanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businessman', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('b_id')->nullable();
            $table->string('businessman_name')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->bigInteger('mobile1')->nullable();
            $table->string('tagline')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('b_email')->nullable();
            $table->string('b_rank')->nullable();
            $table->string('recognised')->nullable();
            $table->string('businessman_title')->nullable();
            $table->string('businessman_header')->nullable();
            $table->string('businessman_option')->nullable();
            $table->string('businessman_option1')->nullable();
            $table->string('businessman_option2')->nullable();
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
        Schema::dropIfExists('businessman');
    }
}
