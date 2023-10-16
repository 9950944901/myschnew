<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school__information', function (Blueprint $table) {
            $table->id();
            $table->string('addmisan_number')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('scode')->nullable();
            $table->string('semail')->nullable();
            $table->string('logoimg')->nullable();
            $table->string('background_img')->nullable();
            $table->string('ssection')->nullable();
            $table->string('saddress')->nullable();
            $table->string('smobile')->nullable();
            $table->string('sname')->nullable();
            $table->string('status_school')->comment('1=Active,0=inactive')->default(0);
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
        Schema::dropIfExists('school__information');
    }
};
