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
        Schema::create('add_promote_student', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('current_result')->nullable();
            $table->string('session_status')->nullable();
            $table->string('session')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
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
        Schema::dropIfExists('add_promote_student');
    }
};
