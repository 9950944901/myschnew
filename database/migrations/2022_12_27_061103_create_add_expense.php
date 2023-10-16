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
        Schema::create('add_expense', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('expense_head')->nullable();
            $table->string('name')->nullable();
            $table->longText('invoice_no')->nullable();
            $table->longText('amount')->nullable();
            $table->longText('date')->nullable();
            $table->longText('document')->nullable();
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
        Schema::dropIfExists('add_expense');
    }
};
