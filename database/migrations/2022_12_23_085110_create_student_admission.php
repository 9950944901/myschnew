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
        Schema::create('student_admission', function (Blueprint $table) {
            $table->id();
            $table->string('admission_no')->unique()->nullable();
            $table->string('roll_no')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('random_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('category')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('conform_password')->nullable();
            $table->string('admission_date')->nullable();
            $table->string('student_image')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('stu_address')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('as_on_date')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_photo')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('mother_occu')->nullable();
            $table->string('mother_photo')->nullable();
            $table->string('guardian')->nullable();
            $table->string('gur_name')->nullable();
            $table->string('gur_relation')->nullable();
            $table->string('gur_email')->nullable();
            $table->string('gur_photo')->nullable();
            $table->string('gur_phone')->nullable();
            $table->string('gur_occu')->nullable();
            $table->string('gur_address')->nullable();
            $table->string('bank_no')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('aadhaar')->nullable();
            $table->string('lin_no')->nullable();
            $table->string('rte')->nullable();
            $table->longText('pre_school')->nullable();
            $table->longText('notes')->nullable();
            $table->string('balance')->nullable();
            $table->string('current_result')->nullable();
            $table->string('session_status')->nullable();
            $table->string('session')->nullable();
            $table->integer('status')->comment('1 = ACTIVE , 0 = INACTIVE')->default(1);
            $table->integer('active_status')->comment('1 = ACTIVE , 0 = INACTIVE')->default(1);
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
        Schema::dropIfExists('student_admission');
    }
};
