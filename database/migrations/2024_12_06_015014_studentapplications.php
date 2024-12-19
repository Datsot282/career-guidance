<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Studentapplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_application', function(Blueprint $table){
           $table->id();
           $table->integer('school_id');
           $table->integer('course_id');
           $table->integer('student_id');
           $table->integer('application_email');
           $table->integer('student_grade_math');
           $table->integer('student_grade_english');
           $table->integer('student_grade_biology');
           $table->integer('student_grade_physics');
           $table->integer('student_grade_accounting');
           $table->text('status');
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
        Schema::dropIfExists('student_application');
    }
}
