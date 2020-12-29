<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->id('paper_id');
            $table->string('title');
            $table->string('type');
            $table->string('requirement');
            $table->string('description');
            $table->string('status');
            $table->string('file')->nullable();
            $table->string('preview')->nullable();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreignId('user_id');
            $table->foreign('expert_id')->references('expert_id')->on('experts')->onDelete('cascade');
            $table->foreignId('expert_id')->nullable();
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
        Schema::dropIfExists('papers', function(Blueprint $table){
            $table->dropForeign('user_id');
            $table->dropIndex('user_id');
            $table->dropColumn('user_id');
        });
        
    }
}
