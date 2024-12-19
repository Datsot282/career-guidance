<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Allinstitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_institudes', function (Blueprint $table) {
            $table->increments('id'); // Use increments for primary key
            $table->text('name');
            $table->text('description')->nullable();
            $table->text('email');
            $table->text('password');
            $table->text('contacts');
            $table->text('location')->nullable();
            $table->timestamps(); // This adds `created_at` and `updated_at` columns
        });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_institudes');
    }
}
