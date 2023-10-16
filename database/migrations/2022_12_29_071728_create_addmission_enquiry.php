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
        Schema::create('addmission_enquiry', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('address')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('note')->nullable();
            $table->longText('date')->nullable();
            $table->string('follow_date')->nullable();
            $table->string('assigned')->nullable();
            $table->string('reference')->nullable();
            $table->string('source')->nullable();
            $table->string('class')->nullable();
            $table->string('number_of_child')->nullable();
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
        Schema::dropIfExists('addmission_enquiry');
    }
};
