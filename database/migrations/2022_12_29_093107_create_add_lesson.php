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
        Schema::create('add_lesson', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('subject_group')->nullable();
            $table->string('subject')->nullable();
            $table->string('lesson')->nullable();
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
        Schema::dropIfExists('add_lesson');
    }
};
