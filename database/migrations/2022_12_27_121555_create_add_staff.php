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
        Schema::create('add_staff', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('staff_id')->nullable();
            $table->string('role')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('joining_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('staff_image')->nullable();
            $table->longText('cadd')->nullable();
            $table->longText('padd')->nullable();
            $table->longText('qualification')->nullable();
            $table->longText('work_exp')->nullable();
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('add_staff');
    }
};
