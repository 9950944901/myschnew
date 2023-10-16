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
        Schema::create('student_attendance', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id')->nullable();
            $table->string('teacher_name')->nullable();
            $table->string('stu_id')->nullable();
            $table->string('admission_no')->nullable();
            $table->string('roll_no')->nullable();
            $table->string('student_name')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('dob')->nullable();
            $table->string('attendance')->nullable();
            $table->string('date')->nullable();
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('student_attendance');
    }
};
