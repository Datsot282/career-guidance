<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_courses', function(Blueprint $table){
            $table->integer('id');
            $table->integer('fuculty_id');
            $table->integer('school_id');
            $table->text('math');
            $table->text('english');
            $table->text('biology');
            $table->text('physics');
            $table->text('accounting');
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
        Schema::dropIfExists('school_courses');
    }
}
