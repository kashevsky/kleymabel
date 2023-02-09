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
        Schema::create('category_haracteristics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('parameter');
            $table->string('value');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->index('category_id');
            $table->index('product_id');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('product_id')->on('products')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_haracteristics');
    }
};
