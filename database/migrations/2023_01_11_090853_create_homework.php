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
        Schema::create('homework', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('teacher')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('subject_group')->nullable();
            $table->string('subject')->nullable();
            $table->string('homework_date')->nullable();
            $table->string('sub_date')->nullable();
            $table->string('evalu_date')->nullable();
            $table->string('document')->nullable();
            $table->longText('desc')->nullable();
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
        Schema::dropIfExists('homework');
    }
};
