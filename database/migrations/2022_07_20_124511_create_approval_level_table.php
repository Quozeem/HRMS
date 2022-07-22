<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approval_level', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('role')->nullable();
            $table->string('rank')->nullable();
            $table->string('department')->nullable();
            $table->string('request_type')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approval_level');
    }
}
