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
            $table->string('meta_title')->nullable();
            $table->string('description')->nullable();
            $table->string('preview_image')->nullable();
            $table->string('alt_main_image')->nullable();
            $table->string('title_main_image')->nullable();
            $table->string('main_image')->nullable();
            $table->text('content')->nullable();
            $table->float('price')->nullable();
            $table->string('engraving_depth')->nullable();
            $table->string('material')->nullable();
            $table->string('width')->nullable();
            $table->string('accessories')->nullable();
            $table->string('form')->nullable();
            $table->string('orders')->nullable();
            $table->string('garanty')->nullable();
            $table->string('slug')->nullable();
            $table->string('video')->nullable();
            $table->text('short_desc')->nullable();
            $table->tinyInteger('show_in_menu')->default(0);
            $table->tinyInteger('is_stamp')->default(1);
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
