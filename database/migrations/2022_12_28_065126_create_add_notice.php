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
        Schema::create('add_notice', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->longText('title')->nullable();
            $table->longText('desc')->nullable();
            $table->string('notice_date')->nullable();
            $table->string('publish_on')->nullable();
            $table->string('send_to')->nullable();
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
        Schema::dropIfExists('add_notice');
    }
};
