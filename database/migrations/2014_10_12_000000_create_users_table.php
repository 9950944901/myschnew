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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('school_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role')->comment('1=Admin,2=Teacher,3=student')->default(0);
            $table->string('conform_password');
            $table->string('image')->nullable();
            $table->string('about')->nullable();
            $table->string('job')->nullable();
            $table->integer('otp')->nullable();
            $table->string('country')->nullable();
            $table->longText('add')->nullable();
            $table->string('phone')->nullable();
            $table->string('twitter_profile')->nullable();
            $table->string('facebook_profile')->nullable();
            $table->string('instagram_profile')->nullable();
            $table->string('Linkedin_profile')->nullable();
            $table->integer('status')->comment('1 = ACTIVE , 0 = INACTIVE')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
