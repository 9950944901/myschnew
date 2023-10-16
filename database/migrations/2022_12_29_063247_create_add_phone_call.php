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
        Schema::create('add_phone_call', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->longText('desc')->nullable();
            $table->string('follow_date')->nullable();
            $table->string('call_duration')->nullable();
            $table->longText('note')->nullable();
            $table->string('call_type')->nullable();
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
        Schema::dropIfExists('add_phone_call');
    }
};
