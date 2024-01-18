<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('level_id');
            $table->foreign('category_id')->references('id')->on('category'); 
            $table->foreign('instructor_id')->references('id')->on('instructor');
            $table->foreign('program_id')->references('id')->on('program'); 
            $table->foreign('level_id')->references('id')->on('level');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->integer('duration');
            $table->integer('new_cost');
            $table->integer('old_cost');
            $table->integer('student_number');
            $table->integer('lessons_number');
            $table->integer('quizes_number');
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
        Schema::dropIfExists('course');
    }
}
