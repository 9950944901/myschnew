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
        Schema::create('leave_request', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('role')->nullable();
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->string('leave_type')->nullable();
            $table->string('from_date')->nullable();
            $table->string('todate')->nullable();
            $table->longText('reason')->nullable();
            $table->longText('note')->nullable();
            $table->longText('document')->nullable();
            $table->longText('same')->nullable();
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
        Schema::dropIfExists('leave_request');
    }
};
