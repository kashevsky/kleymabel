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
        Schema::create('categories', function (Blueprint $table) {
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
            $table->text('short_desc')->nullable();
            $table->string('icon')->nullable();
            $table->string('icon_black')->nullable();
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
        Schema::dropIfExists('categories');
    }
};
