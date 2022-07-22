<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakeRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('make_request', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('rank')->nullable();
            $table->string('verify_by')->nullable();
            $table->string('request_type')->nullable();
            $table->string('status')->nullable();
            $table->string('department')->nullable();
            $table->string('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('make_request');
    }
}
