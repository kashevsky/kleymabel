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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('preview_image')->nullable();
            $table->text('content')->nullable();
            $table->float('price')->nullable();
            $table->string('engraving_depth')->nullable();
            $table->string('material')->nullable();
            $table->string('width')->nullable();
            $table->string('accessories')->nullable();
            $table->string('form')->nullable();
            $table->string('garanty')->nullable();
            $table->string('slug')->nullable();
            $table->string('sub_products_ids')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id');
            $table->foreign('category_id')->on('categories')->references('id');
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
        Schema::dropIfExists('products');
    }
};
