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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->unsignedDouble('price');
            $table->unsignedBigInteger('size_number'); // here is the size for item
            $table->unsignedBigInteger('line')->onDelete('cascade')->nullable();
            $table->foreign('line')->references('id')->on('lines')->onDelete('cascade');


            // catogery
            $table->unsignedBigInteger('catogery')->onDelete('cascade')->nullable();
            $table->foreign('catogery')->references('id')->on('catogeries')->onDelete('cascade');
            // brand
            $table->unsignedBigInteger('brand')->onDelete('cascade')->nullable();
            $table->foreign('brand')->references('id')->on('brands')->onDelete('cascade');
            // // type
            $table->unsignedBigInteger('type')->onDelete('cascade')->nullable();
            $table->foreign('type')->references('id')->on('types')->onDelete('cascade');
            // // size or measure for items
            $table->unsignedBigInteger('size')->onDelete('cascade')->nullable();
            $table->foreign('size')->references('id')->on('sizes')->onDelete('cascade');


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
        Schema::dropIfExists('items');
    }
};
