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
        Schema::create('qoutations', function (Blueprint $table) {
            $table->id();
            $table->date("qoutation_date");
            $table->date("expire_date");
            $table->string("project_name");
            $table->string("statues");
            $table->text("description");
            $table->string("refrence");
            $table->unsignedDouble("indrect");
            $table->unsignedDouble("addition");
            $table->unsignedDouble("consult");
            $table->unsignedDouble("risk");
            $table->unsignedBigInteger('customer')->onDelete('cascade')->nullable();
            $table->foreign('customer')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::dropIfExists('qoutations');
    }
};
