<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreignId('user_id')->nullable();
            $table->foreign('expert_id')->references('expert_id')->on('experts')->onDelete('cascade');
            $table->foreignId('expert_id')->nullable();
            $table->foreign('paper_id')->references('paper_id')->on('papers')->onDelete('cascade');
            $table->foreignId('paper_id')->nullable();
            $table->string('comment');
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
        Schema::dropIfExists('comments');
    }
}
