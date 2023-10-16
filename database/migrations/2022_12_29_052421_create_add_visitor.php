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
        Schema::create('add_visitor', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('purpose')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_number')->nullable();
            $table->string('number_person')->nullable();
            $table->string('date')->nullable();
            $table->string('intime')->nullable();
            $table->string('outtime')->nullable();
            $table->longText('desc')->nullable();
            $table->string('document')->nullable();
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
        Schema::dropIfExists('add_visitor');
    }
};
