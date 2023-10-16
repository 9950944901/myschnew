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
        Schema::create('exam_results', function (Blueprint $table) {
            $table->id();
 // students Profile
            $table->string('sname')->nullable();
            $table->integer('add_no')->unique();
            $table->string('session')->nullable();
            $table->string('exam_group')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->integer('roll_no')->nullable();
            $table->integer('total_marks')->nullable();
            $table->integer('rec_marks')->nullable();
            $table->integer('percent')->nullable();
            $table->string('result')->nullable();
            $table->string('other')->nullable();


       
// Strang-------------
            $table->integer('st_english')->nullable();
            $table->integer('st_hindi')->nullable();
            $table->integer('st_math')->nullable();
            $table->integer('st_science')->nullable();
            $table->integer('st_social')->nullable();
            $table->integer('st_sanskrit')->nullable();
       
// half yearly examination
            $table->integer('half_english')->nullable();
            $table->integer('half_hindi')->nullable();
            $table->integer('half_math')->nullable();
            $table->integer('half_science')->nullable();
            $table->integer('half_social')->nullable();
            $table->integer('half_sanskrit')->nullable();
// annul examination
            $table->integer('anul_english')->nullable();
            $table->integer('anul_hindi')->nullable();
            $table->integer('anul_math')->nullable();
            $table->integer('anul_science')->nullable();
            $table->integer('anul_social')->nullable();
            $table->integer('anul_sanskrit')->nullable();
 // status
            $table->integer('status')->comment('1 = ACTIVE , 0 = INACTIVE')->default(1);
            $table->integer('exam_status')->comment('1=Active,0=Inactive')->default(1);
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
        Schema::dropIfExists('exam_results');
    }
};
