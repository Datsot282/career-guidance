<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
            $table->integer('id');
            $table->text('name');
            $table->text('email');
            $table->text('email_verified_at');
            $table->text('password');
            $table->text('user_about');
            $table->text('user_contacts');
            $table->integer('user_type');
            $table->integer('gender');
            $table->text('dateofbirth');
            $table->text('contact');
            $table->integer('math');
            $table->integer('english');
            $table->integer('biology');
            $table->integer('physics');
            $table->integer('accounting');
            $table->text('remember_token');
            $table->integer('school_id');
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
        Schema::dropIfExists('users');
    }
}
