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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('unique_comment_id');
            $table->string('comment_user_name');
            $table->string('comment_user_image');
            $table->string('comments');
            $table->unsignedInteger('user_unique_id')->nullable();

            $table->foreign('user_unique_id')->references('unique_user_id')->on('users');
            
            // $table->foreign('user_id')->references('id')->on('Users')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
