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
        Schema::create('news_comments', function (Blueprint $table) {
            $table->id('news_comment_id');
            $table->unsignedBigInteger('unique_news_id')->index();
            $table->unsignedBigInteger('comment_id')->index();

            $table->foreign('unique_news_id')->references('unique_news_id')->on('news');
            $table->foreign('comment_id')->references('unique_comment_id')->on('comments');
            
            $table->boolean('comment_status')->default(1);
            $table->string('disabled_by')->default('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_comments');
    }
};
