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
        Schema::create('qoutation_batches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('line')->onDelete('cascade')->nullable();
            $table->foreign('line')->references('id')->on('lines')->onDelete('cascade');
            $table->unsignedBigInteger('qoute')->onDelete('cascade')->nullable();
            $table->foreign('qoute')->references('id')->on('qoutations')->onDelete('cascade');
            $table->unsignedDouble("factor");


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
        Schema::dropIfExists('qoutation_batches');
    }
};
