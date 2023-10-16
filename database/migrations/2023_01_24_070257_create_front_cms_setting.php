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
        Schema::create('front_cms_setting', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_code')->nullable();
            $table->string('school_phone')->nullable();
            $table->string('school_email')->nullable();
            $table->longText('school_address')->nullable();
            $table->string('open_start_time')->nullable();
            $table->string('open_end_time')->nullable();
            $table->string('web_logo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('skype')->nullable();
            $table->string('google')->nullable();
            $table->string('copy_by')->nullable();
            $table->string('copy_by_url')->nullable();
            $table->longText('about')->nullable();
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
        Schema::dropIfExists('front_cms_setting');
    }
};
