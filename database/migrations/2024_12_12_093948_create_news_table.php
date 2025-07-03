<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id('unique_news_id');
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('category_id')->on('categories');

            $table->string('news_title');
            $table->string('news_short_description');
            $table->string('news_long_description');
            $table->string('new_image');+
            $table->string('news_status');
            $table->integer('views_count');
            $table->string('author_name');
            $table->timestamps();
           


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
