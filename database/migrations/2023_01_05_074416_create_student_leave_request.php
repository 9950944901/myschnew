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
        Schema::create('student_leave_request', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('Student_name')->nullable();
            $table->string('Apply_date')->nullable();
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
            $table->string('reason')->nullable();
            $table->longText('document')->nullable();
            $table->string('approvalby')->nullable();
            $table->integer('status')->comment('1 = ACTIVE , 0 = INACTIVE , 2 = NONE')->default(1);
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
        Schema::dropIfExists('student_leave_request');
    }
};
