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
        Schema::create('front_cms_openings', function (Blueprint $table) {
            $table->id();
            $table->string('job_id')->nullable();
            $table->string('post')->nullable();
            $table->string('vacancies')->nullable();
            $table->string('work_status')->nullable();
            $table->string('experience')->nullable();
            $table->string('qualification')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('front_cms_openings');
    }
};
