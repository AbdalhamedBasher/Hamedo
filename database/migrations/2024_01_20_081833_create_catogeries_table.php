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
        Schema::create('catogeries', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->unsignedBigInteger('main_catogery')->onDelete('cascade')->nullable();
            $table->foreign('main_catogery')->references('id')->on('catogeries')->onDelete('cascade');
            $table->unsignedBigInteger('line')->onDelete('cascade')->nullable();
            $table->foreign('line')->references('id')->on('lines')->onDelete('cascade');
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
        Schema::dropIfExists('catogeries');
    }
};
