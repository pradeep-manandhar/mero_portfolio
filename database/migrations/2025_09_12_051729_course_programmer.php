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
        //
        Schema::create('course_programmer', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('programmer_id');
            $table->unique(['course_id', 'programmer_id']);
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('programmer_id')->references('id')->on('programmers')->onDelete('cascade');

        }
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('course_programmer');
    }
};
