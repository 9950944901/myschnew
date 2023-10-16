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
        Schema::create('exam_schedule', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->string('exam_group')->nullable();
            $table->string('class')->nullable();
            $table->string('date_from')->nullable();
            $table->string('start_time')->nullable();
            $table->string('duration')->nullable();
            $table->string('room_no')->nullable();
            $table->string('max_marks')->nullable();
            $table->string('min_marks')->nullable();
            $table->string('other')->nullable();
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
        Schema::dropIfExists('exam_schedule');
    }
};
