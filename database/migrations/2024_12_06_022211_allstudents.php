<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Allstudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_student', function(Blueprint $table){
            $table->integer('id');
            $table->text('fname');
            $table->text('lname');
            $table->text('gender');
            $table->text('dateofbirth');
            $table->text('email');
            $table->text('contact');
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
        Schema::dropIfExists('system_student');
    }
}
