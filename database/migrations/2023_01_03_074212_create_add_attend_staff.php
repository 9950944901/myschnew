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
        Schema::create('add_attend_staff', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('staff_id')->nullable();
            $table->string('attendance')->nullable();
            $table->string('desc')->nullable();
            $table->string('date')->nullable();
            $table->integer('status')->comment('1 = ACTIVE , 0 = INACTIVE')->default(1);
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
        Schema::dropIfExists('add_attend_staff');
    }
};
