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
        Schema::create('add_collect_fees', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('stu_id')->nullable();
            $table->string('date')->nullable();
            $table->string('fees_group')->nullable();
            $table->string('fees_type')->nullable();
            $table->string('payment_mode')->nullable();
            $table->longText('note')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('add_collect_fees');
    }
};
