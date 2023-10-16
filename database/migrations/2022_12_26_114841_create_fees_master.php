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
        Schema::create('fees_master', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('group')->nullable();
            $table->string('type')->nullable();
            $table->string('due_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('fine_type')->nullable();
            $table->string('percentage')->nullable();
            $table->string('fine_amount')->nullable();
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
        Schema::dropIfExists('fees_master');
    }
};
